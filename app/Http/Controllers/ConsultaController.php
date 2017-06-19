<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


use GeneaLabs\Bones\Flash\Flash;
use App\ConsultaMedica;
use App\Cita;
use App\User;
use App\Expediente;
use App\Persona;
use App\Doctor;
use App\Tratamiento;
use App\TipoTratamiento;
use App\TipoExamenClinico;
use App\TipoExamenFisico;
use App\Enfermedad;
use App\Medicamento;
use App\ExamenClinico;
use App\ExamenFisico;
use App\Diagnostico;
use App\ResExamenFisico;
use App\ResultadoExamenClinico;
use App\Imagen;
use App\Audio;
use App\Video;
use App\CostoServicio;
use App\SignoVital;
use Carbon\Carbon;
use DB;



class ConsultaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id){
        $consulta= Cita::where('id',$id)->get();
        $tipoexamenclinico=TipoExamenClinico::all();
        $tipoexamenfisico=TipoExamenFisico::all();
        $tipotratamiento=TipoTratamiento::all();
        $medicamentos=Medicamento::all();
        $enfermedad=Enfermedad::all();

        $consulta->each(function($consulta){   
             $consulta->expedientes;

            });

        return view('consulta.consultamedica')
        ->with('tipoexamenclinico',$tipoexamenclinico)
        ->with('tipoexamenfisico',$tipoexamenfisico)
        ->with('tipotratamiento',$tipotratamiento)
        ->with('medicamentos',$medicamentos)
        ->with('enfermedad',$enfermedad)
        ->with('consulta',$consulta);

    }

    public function index(){
        $dia=date("d");
        $day= (string) $dia;
        
        //dd($usuario);
        $persona=Persona::where('iduser',Auth::user()->id)->get();

        if(count($persona)>0){
            
            $doctor=Doctor::where('idpersona',$persona[0]->id)->get();
            
            if(count($doctor)>0){
            $cadena1="select  * from (select (EXTRACT(DAY FROM start)),cita.id as cita,cita.idexpediente,primernombre,primerapellido,dui,nombredoctor,color,finalizada from cita inner join doctor on cita.iddoctor = doctor.id inner join persona on persona.id=doctor.idpersona) as dia inner join expediente on dia.idexpediente=expediente.id";
            $cadena2=" where date_part=".$dia." AND finalizada = 'false' AND nombredoctor='".$doctor[0]->nombredoctor."'";
            $resultado=$cadena1 . $cadena2;

            $consultamedica = DB::select(DB::raw($resultado));
            
            }else
            {
            $cadena1="select  * from (select (EXTRACT(DAY FROM start)),cita.id as cita,cita.idexpediente,primernombre,primerapellido,dui,nombredoctor,color,finalizada from cita inner join doctor on cita.iddoctor = doctor.id inner join persona on persona.id=doctor.idpersona) as dia inner join expediente on dia.idexpediente=expediente.id";
            $cadena2=" where date_part=".$dia." AND finalizada = 'false'";
            $resultado=$cadena1 . $cadena2;

            $consultamedica = DB::select(DB::raw($resultado));
            
            }

           
        }
         return view('consulta.index')->with('diagnostico',$consultamedica);
    }

    public function store(Request $request){

       //dd($request->all());
        $costo= new CostoServicio();
        $costo->nombreservicio='Cita';
        $costo->preciocostoservicio=0;
        $costo->descripcionservicio='Facturacion';
        $costo->save();

        //Guardando e consulta
        $consulta = new ConsultaMedica();
        $consulta->fechaconsulta=Carbon::now();
        $consulta->descripcionsintomas=$request->descripciondesintomas;
        $consulta->sintomatologia=$request->descripciondesintomas;
        $consulta->idcita=$request->idcita;
        $consulta->costosServicios()->associate($costo);
        $consulta->save();

        $signoVital = new SignoVital();
        $signoVital->idcita = $request->idcita;
        $signoVital->peso = $request->peso;
        $signoVital->estatura = $request->estatura;
        $signoVital->temperatura = $request->temperatura;
        $signoVital->presionarterial = $request->presionarterial;
        $signoVital->ritmocardiaco = $request->ritmocardiaco;
        $signoVital->momento = 1;

        $signoVital->save();
        

        //Guardando examen clinico
        if(count($request->idtipoexamenclinico)>0){
        foreach ($request->idtipoexamenclinico as $valor ) {
            $examenclinico = new ExamenClinico();
            $tipoexcamen =TipoExamenClinico::find($valor);
            $examenclinico->tipoExamenesClinico()->associate($tipoexcamen);
            $examenclinico->consultasMedicas()->associate($consulta);
            $examenclinico->save();
        }
        }

        //Guardando examen fisico
        if(count($request->idtipoexamenfisico)>0){
        foreach ($request->idtipoexamenfisico as $valor ) {
            $examenfisico = new ExamenFisico();
            $tipoexcamen =TipoExamenFisico::find($valor);
            $examenfisico->tipoExamenesFisicos()->associate($tipoexcamen);
            $examenfisico->consultasMedicas()->associate($consulta);
            $examenfisico->save();
        }
    }

        //Guardando en Tratamiento
        $tratamiento= new Tratamiento();
        $tratamiento->idtipotratamiento=$request->idtipotratamiento;
        $tratamiento->dosis=$request->dosis;
        $tratamiento->frecuencia=$request->frecuencia;

        if($request->operacion){
            $tratamiento->espostop=false;
        }else{
            $tratamiento->espostop=true;
        }

        $tratamiento->save();


        //Guardar en Diagnostico

        $diagnostico = new Diagnostico();
        $diagnostico->consultasMedicas()->associate($consulta);
        $enfermedad = Enfermedad::find($request->idenfermedad);
        $diagnostico->enfermedades()->associate($enfermedad);
        $diagnostico->tratamientos()->associate($tratamiento);
        $diagnostico->descripciondiagnostico=$request->descripciondediagnostico;
        $diagnostico->save();

        //Llenando tabl pivote TratamientoMedicamento
        foreach ($request->medicamentos as $valor ) {   
            $medicamento =Medicamento::find($valor);
            $tratamiento->tratamientoMedicamento()->attach($medicamento);
        }

        //dd($diagnostico);
        Flash::success('Se guardo la consulta');

        if($request->operacion){
            return redirect()->route('ingreso.show',[$request->idexpediente]);
        }else{
        $dia=date("d");
        $day= (string) $dia;
        
        //dd($usuario);
        $persona=Persona::where('iduser',Auth::user()->id)->get();
        if(count($persona)>0){
            
            $doctor=Doctor::where('idpersona',$persona[0]->id)->get();
            if(count($doctor)>0){
            $cadena1="select  * from (select (EXTRACT(DAY FROM start)),cita.id as cita,cita.idexpediente,primernombre,primerapellido,dui,nombredoctor,color,finalizada from cita inner join doctor on cita.iddoctor = doctor.id inner join persona on persona.id=doctor.idpersona) as dia inner join expediente on dia.idexpediente=expediente.id";
            $cadena2=" where date_part=".$dia." AND finalizada = 'false' AND nombredoctor='".$doctor[0]->nombredoctor."'";
            $resultado=$cadena1 . $cadena2;

            $consultamedica = DB::select(DB::raw($resultado));
            
            }else
            {
            $cadena1="select  * from (select (EXTRACT(DAY FROM start)),cita.id as cita,cita.idexpediente,primernombre,primerapellido,dui,nombredoctor,color,finalizada from cita inner join doctor on cita.iddoctor = doctor.id inner join persona on persona.id=doctor.idpersona) as dia inner join expediente on dia.idexpediente=expediente.id";
            $cadena2=" where date_part=".$dia." AND finalizada = 'false'";
            $resultado=$cadena1 . $cadena2;

            $consultamedica = DB::select(DB::raw($resultado));
            }
        }
        return view('consulta.index')->with('diagnostico',$consultamedica);
        }

        
    }

    public function create(){

        //$usuario = User::all()->lists('nombres','id');
        //$hospital = Hospital::all()->lists('nombre','id');
        
        return view('consulta.consultamedica');
        //->with('usuarios',$usuario)
        //->with('hospitales',$hospital);

    }

    public function VerCitasFinalizadas(){

        $user = User::where('id',Auth::user()->id)->get();

        if(count($user)>0){
            $persona=Persona::where('iduser',$user[0]->id)->get();
            if(count($persona)>0){
                $expediente=Expediente::where('idpersona',$persona[0]->id)->get();
                //dd($expediente);
                if(count($expediente)>0){
                    $cita=Cita::where('idexpediente',$expediente[0]->id)->where('finalizada',true)->get();
                    //dd($cita);
                    $cita->each(function($cita){
                        $cita->expedientes;
                    });
                    //dd($cita);
                    return view('consulta.citasdelpaciente')->with('cita',$cita);
                }
            }
            
        }
        $cita = null;
        return view('consulta.citasdelpaciente')->with('cita',$cita);
    }

    public function VerExamenesPendientes($id){
        /*$consulta = ConsultaMedica::where('idcita',$id);
        $consulta->examenClinico();
        dd($consulta);*/
        
        $consulta1="select * from tipoexamenclinico where id in(select idtipoexamenclinico from examenclinico where idconsultamedica in (select id from consultamedica where idcita=".$id.") and idresultadoexamenclinico is null)";
        

        $consulta2="select * from tipoexamenfisico where id in(select idtipoexamenfisico from examenfisico where idconsultamedica in (select id from consultamedica  where  idcita=".$id.") and idresultadoexamenfisico is null)";

        $examenesclinicos = DB::select(DB::raw($consulta1));

        $examenesfisicos= DB::select(DB::raw($consulta2));
        //
        //dd($examenesclinicos);
        ///////////////////////////////////////
        $user = User::where('id',Auth::user()->id)->get();

        if(count($user)>0){
            $persona=Persona::where('iduser',$user[0]->id)->get();
            if(count($persona)>0){
                $expediente=Expediente::where('idpersona',$persona[0]->id)->get();
                //dd($expediente);
                if(count($expediente)>0){
                    $cita=Cita::where('idexpediente',$expediente[0]->id)->where('finalizada',true)->where('id',$id)->get();
                    //dd($cita);
                    if(count($cita)>0){
                        $consultaMedica=ConsultaMedica::where('idcita',$cita[0]->id)->get();
                        if(count($consultaMedica)>0){
                            $examenFisicoResuelto = ExamenFisico::where('idconsultamedica',$consultaMedica[0]->id)->where('idresultadoexamenfisico', '<>',null)->get();

                            foreach($examenFisicoResuelto as $exResuleto){
                                $exResuleto->tipoExamenFisico = TipoExamenFisico::find($exResuleto->idtipoexamenfisico);
                            }  

                            $examenClinicoResuelto = ExamenClinico::where('idconsultamedica',$consultaMedica[0]->id)->where('idresultadoexamenclinico', '<>',null)->get();

                            foreach($examenClinicoResuelto as $exResuleto){
                                $exResuleto->tipoExamenClinico = TipoExamenClinico::find($exResuleto->idtipoexamenclinico);
                            }                                                      


                        }
                    }

                }
            }
        }
        ///////////////////////////////////////

        return view('consulta.examenespendientes')
        ->with('examenesfisicos',$examenesfisicos)
        ->with('examenesclinicos',$examenesclinicos)
        ->with('examenFisicoResuelto',$examenFisicoResuelto)
        ->with('examenClinicoResuelto',$examenClinicoResuelto);
        
    }


    
    public function destroy($id){

        $consulta = ConsultaMedica::where('id', '=', $id)->delete();

        Flash::danger('Se elimino la consulta');

        return back();
    
    }

    public function detalleExamenFisico($id){

        $exFisico = ExamenFisico::find($id);

      
        $exFisico->consultaMedica = ConsultaMedica::find($exFisico->idconsultamedica);
        $exFisico->tipoExamenFisico = TipoExamenFisico::find($exFisico->idtipoexamenfisico);
        $exFisico->cita = Cita::find($exFisico->consultaMedica->idcita);
        $exFisico->expediente = Expediente::find($exFisico->cita->idexpediente);
        $exFisico->resExamenFisico = ResExamenFisico::find($exFisico->idresultadoexamenfisico);

        if($exFisico->resExamenFisico->idimagen != null){
            $exFisico->imagen = Imagen::find($exFisico->resExamenFisico->idimagen);
        }
        if($exFisico->resExamenFisico->idvideo != null){
            $exFisico->video = Video::find($exFisico->resExamenFisico->idvideo);
        }
        if($exFisico->resExamenFisico->idaudio != null){
            $exFisico->audio = Audio::find($exFisico->resExamenFisico->idaudio);
        }

        return view('consulta.detalleExamenFisico')->with(['exFisico' => $exFisico]);
    }

    public function detalleExamenClinico($id){

        $exClinico = ExamenClinico::find($id);

        $exClinico->consultaMedica = ConsultaMedica::find($exClinico->idconsultamedica);
        $exClinico->tipoExamenClinico = TipoExamenClinico::find($exClinico->idtipoexamenclinico);
        $exClinico->cita = Cita::find($exClinico->consultaMedica->idcita);
        $exClinico->expediente = Expediente::find($exClinico->cita->idexpediente);
        $exClinico->resExamenClinico = ResultadoExamenClinico::find($exClinico->idresultadoexamenclinico);

        return view('consulta.detalleExamenClinico')->with(['exClinico' => $exClinico]);
    }

    public function redExamenFisico($id){
        //dd($id);
        return redirect()->route('consulta.citasdelpaciente');
        
    }

    public function redExamenClinico($id){
        return redirect()->route('consulta.citasdelpaciente');
    }
}
