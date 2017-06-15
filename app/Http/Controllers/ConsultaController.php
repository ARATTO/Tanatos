<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GeneaLabs\Bones\Flash\Flash;
use App\ConsultaMedica;
use App\Cita;
use App\Tratamiento;
use App\TipoTratamiento;
use App\TipoExamenClinico;
use App\TipoExamenFisico;
use App\Enfermedad;
use App\Medicamento;
use App\ExamenClinico;
use App\ExamenFisico;
use App\Diagnostico;
use Carbon\Carbon;
use DB;


class ConsultaController extends Controller
{
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

        $cadena1="select  * from (select (EXTRACT(DAY FROM start)),cita.id as cita,cita.idexpediente,primernombre,primerapellido,dui,nombredoctor,color,finalizada from cita inner join doctor on cita.iddoctor = doctor.id inner join persona on persona.id=doctor.idpersona) as dia inner join expediente on dia.idexpediente=expediente.id";
        $cadena2=" where date_part=".$dia." AND finalizada = 'false'";
        $resultado=$cadena1 . $cadena2;

        $consultamedica = DB::select(DB::raw($resultado));
        
        
        return view('consulta.index')->with('diagnostico',$consultamedica);

    }

    public function store(Request $request){

       //dd($request->all());

        //Guardando e consulta
        $consulta = new ConsultaMedica();
        $consulta->fechaconsulta=Carbon::now();
        $consulta->descripcionsintomas=$request->descripciondesintomas;
        $consulta->sintomatologia=$request->descripciondesintomas;
        $consulta->idcita=$request->idcita;
        $consulta->idcostoservicio=1;
        $consulta->save();

        //Guardando examen clinico
        foreach ($request->idtipoexamenclinico as $valor ) {
            $examenclinico = new ExamenClinico();
            $tipoexcamen =TipoExamenClinico::find($valor);
            $examenclinico->tipoExamenesClinico()->associate($tipoexcamen);
            $examenclinico->consultasMedicas()->associate($consulta);
            $examenclinico->save();
        }

        //Guardando examen fisico
        foreach ($request->idtipoexamenfisico as $valor ) {
            $examenfisico = new ExamenFisico();
            $tipoexcamen =TipoExamenFisico::find($valor);
            $examenfisico->tipoExamenesFisicos()->associate($tipoexcamen);
            $examenfisico->consultasMedicas()->associate($consulta);
            $examenfisico->save();
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

            $cadena1="select  * from (select (EXTRACT(DAY FROM start)),cita.id as cita,cita.idexpediente,primernombre,primerapellido,dui,nombredoctor,color,finalizada from cita inner join doctor on cita.iddoctor = doctor.id inner join persona on persona.id=doctor.idpersona) as dia inner join expediente on dia.idexpediente=expediente.id";
            $cadena2=" where date_part=".$dia." AND finalizada = 'false'";
            $resultado=$cadena1 . $cadena2;

            $consultamedica = DB::select(DB::raw($resultado));
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

    public function VerExamenesPendientes(){

        //$usuario = User::all()->lists('nombres','id');
        //$hospital = Hospital::all()->lists('nombre','id');

        return view('consulta.examenespendientes');
        //->with('usuarios',$usuario)
        //->with('hospitales',$hospital);

    }

    public function RegistrarResultadosExamenes(){

        //$usuario = User::all()->lists('nombres','id');
        //$hospital = Hospital::all()->lists('nombre','id');

        return view('consulta.resultadosexamenes');
        //->with('usuarios',$usuario)
        //->with('hospitales',$hospital);

    }


    
    public function destroy($id){

        $consulta = ConsultaMedica::where('id', '=', $id)->delete();

        Flash::danger('Se elimino la consulta');

        return back();
    
    }
}
