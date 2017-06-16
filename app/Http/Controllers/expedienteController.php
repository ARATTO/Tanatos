<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GeneaLabs\Bones\Flash\Flash;
use App\Expediente;
use App\Cita;
use App\HistorialClinico;
use App\User;
use App\Hospital;
use DB;

class expedienteController extends Controller
{
    public function show(Request $request){
        $expediente = DB::table('expediente')
            ->join("persona","expediente.idpersona","=","persona.id")
            ->get();

        return view('expediente.index');
    }

    

    public function store(Request $request){
        $historialClinico=new HistorialClinico;
        $historialClinico->nombremadre = $request->nombremadre;
        $historialClinico->nombrepadre = $request->nombrepadre;
        $historialClinico->antesedentes = $request->antecedentes;
        $historialClinico->save();

        $auxiliar = DB::table('historialclinico')->orderBy('id','desc')->first();

        $expediente = new Expediente;
        $expediente->idhistorialclinico = $auxiliar->id;
        $expediente->idpersona = $request->id;
        $expediente->idhospital = $request->idhospitales;
        $expediente->save();

        Flash::success('Se guardo el expediente');

        return view('/home');
    }

    public function create(){

        $usuario = USER::all()->lists('email','id');
        $hospital = Hospital::all()->lists('nombre','id');

        return view('expediente.create')
        ->with('usuarios',$usuario)
        ->with('hospitales',$hospital);

    }


    public function index(){
        $expediente = DB::table('expediente')
            ->join("persona","expediente.idpersona","=","persona.id")
            ->get();

        
        return view('expediente.index')->with('expedientes',$expediente);

    }

    public function verExpedientes($id){
        
        $consulta= Expediente::where('idpersona',$id)->get();
            

            $consulta->each(function($consulta){   
             $consulta->personas->detallesDirecciones->municipios;
             $consulta->personas->telefonos;
             $consulta->personas->users;
             $consulta->personas->estadosCiviles;
             $consulta->historialesClinicos;
             $consulta->cita;
             $consulta->ingreso;

            });

            

        $consulta2 = DB::table('expediente')
        ->join("historialclinico","expediente.idhistorialclinico","=","historialclinico.id")
        ->where('expediente.id','=',$id)
        ->get();

        return view('expediente.vista')
        ->with('consulta',$consulta);
        

    }

    public function destroy($id){

        $expediente = Expediente::where('id', '=', $id)->delete();

        Flash::danger('Se elimino el expediente');

        return back();
    
    }

    
}
