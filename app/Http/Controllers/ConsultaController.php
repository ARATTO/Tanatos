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
use DB;


class ConsultaController extends Controller
{
    public function show($id){
        $consulta= Cita::where('id',$id)->get();
        $tipoexamenclinico=TipoExamenClinico::all()->lists('nombreexamenclinico','id');
        $tipoexamenfisico=TipoExamenFisico::all()->lists('nombreexamenfisico','id');
        $tipotratamiento=TipoTratamiento::all()->lists('nombretipotratamiento','id');
        $medicamentos=Medicamento::all()->lists('nombremedicamento','id');
        $enfermedad=Enfermedad::all()->lists('nombreenfermedad','id');

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

        $cadena1="select  * from (select (EXTRACT(DAY FROM start)),cita.id as cita,cita.idexpediente,primernombre,primerapellido,dui,nombredoctor,color from cita inner join doctor on cita.iddoctor = doctor.id inner join persona on persona.id=doctor.idpersona) as dia inner join expediente on dia.idexpediente=expediente.id";
        $cadena2=" where date_part=".$dia;
        $resultado=$cadena1 . $cadena2;

        $consultamedica = DB::select(DB::raw($resultado));
        dd($consultamedica);
        
        return view('consulta.index')->with('diagnostico',$consultamedica);

    }

    public function store(Request $request){
        $consultaMedica=new ConsultaMedica;
        $consultaMedica->nombremadre = $request->nombremadre;
        $consultaMedica->nombrepadre = $request->nombrepadre;
        $consultaMedica->antesedentes = $request->antecedentes;
        $consultaMedica->save();

        $auxiliar = DB::table('historialclinico')->orderBy('id','desc')->first();

        $expediente = new Expediente;
        $expediente->idhistorialclinico = $auxiliar->id;
        $expediente->idusuario = $request->id;
        $expediente->idhospital = $request->idhospitales;
        $expediente->save();

        Flash::success('Se guardo la consulta');

        return view('/diagnostico');
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
