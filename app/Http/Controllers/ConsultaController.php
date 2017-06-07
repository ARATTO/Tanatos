<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GeneaLabs\Bones\Flash\Flash;
use App\ConsultaMedica;
use App\Cita;
use App\Diagnostico;
use DB;


class ConsultaController extends Controller
{
    public function show(Request $request){
        

        return view('consulta.index');

    }

    public function index(){
        $dia=date("d");
        $day= (string) $dia;

        $cadena1="select * from (select EXTRACT(DAY FROM cita.start),nombres,cita.id  from cita natural join expediente natural join usuario) as dia";
        $cadena2=" where date_part= ".$day;
        $resultado=$cadena1 . $cadena2;

        $consultamedica = DB::select(DB::raw($resultado));
        //dd($consultamedica);
        
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

        Flash::success('Se guardo el expediente');

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
