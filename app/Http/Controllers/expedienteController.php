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
            ->join("persona","expediente.id","=","persona.id")
            ->get();

        dd($expediente);
        return view('expediente.index')->with('expedientes',$expediente);

    }

    public function verExpedientes($id){
        $expedientes = Cita::where('idexpediente','=',$id)->get();

        $consulta = DB::table('expediente')
        	->join("persona","expediente.id","=","persona.id")
        	->join("estadocivil","persona.idestadocivil","=","estadocivil.id")
            ->join("telefono","persona.idtelefono","=","telefono.id")
            ->join("detalledireccion","persona.iddetalledireccion","=","detalledireccion.id")
            ->join("municipio","detalledireccion.idmunicipio","=","municipio.id")
            ->join("USER","persona.iduser","=","USER.id")
            ->join("rol","USER.idrol","=","rol.id")
        	->where('expediente.id','=',$id)
            ->get();

            



        $consulta2 = DB::table('expediente')
        ->join("historialclinico","expediente.idhistorialclinico","=","historialclinico.id")
        ->where('expediente.id','=',$id)
        ->get();

        return view('expediente.vista')
        ->with('expedientes',$expedientes)
        ->with('consulta',$consulta)
        ->with('consulta2',$consulta2);

    }

    public function destroy($id){

        $expediente = Expediente::where('id', '=', $id)->delete();

        Flash::danger('Se elimino el expediente');

        return back();
    
    }

    
}
