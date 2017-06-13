<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GeneaLabs\Bones\Flash\Flash;
use App\Expediente;
use App\Cita;
use App\HistorialClinico;
use App\User;
use App\Municipio;
use App\Rol;
use App\Persona;
use App\EstadoCivil;
use App\Hospital;
use DB;

class expedienteController extends Controller
{
    public function show(Request $request){
       /* $expediente = DB::table('expediente')
            ->join("persona","expediente.id","=","persona.id")
            ->get();

        return view('expediente.index');*/

        dd($request);
        $estadoCivil = EstadoCivil::all();
        $municipio = Municipio::all();

        return view('user.paciente')->with([
            'estadoCivil'=>$estadoCivil, 
            'municipio'=>$municipio,
        ]);



    }

    

    public function store(Request $request){
        /*
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
        return view('/home');*/
        

        try{
            $persona= Persona::where('dui',$request->dui)->first();
             if($persona){
                $historialClinico = new HistorialClinico();
                $historialClinico->fill($request->all());
                $historialClinico->save();

                $expediente= new Expediente(); 
                $expediente->idpersona=$persona->id;
                $expediente->idhistorialclinico= $historialClinico->id;
                $expediente->idhospital=$request->idhospital;
                $expediente->save();
                
                //dd($expediente);
                Flash::success(trans('eetntmessage.ExpedienteCreado'));
            }else{
                 Flash::danger(trans('eetntmessage.UsuarioNoEncontrado'));
                 return redirect()->route('expediente.create'); 
            }

        }catch(Exception $e){
            Flash::danger($e->getMessage());
        }

        return redirect()->route('expediente.index'); 
    }

    public function create(){
/*
        $usuario = USER::all()->lists('email','id');
        $hospital = Hospital::all()->lists('nombre','id');
        $estadosciviles = EstadoCivil::orderBy('id')->lists('nombreestadocivil','id');

        return view('expediente.create')
        ->with('estadosciviles',$estadosciviles)

        ->with('hospitales',$hospital);*/


        $hospitales = Hospital::all();
        return view('expediente.create')->with('hospitales',$hospitales);
        //dd($hospitales);
    }


    public function index(){
        /*
        $expediente = DB::table('expediente')
            ->join("persona","expediente.id","=","persona.id")
            ->get();

        return view('expediente.index')->with('expedientes',$expediente);
        */
        
        $expedientes = Expediente::orderBy('id','ASC')->paginate(1);

        $expedientes->each(function($expedientes){
            $expedientes->hospitales;
            $expedientes->personas->telefonos;
            
        });
        

        //dd($expedientes);
        return view('expediente.index')->with('expedientes',$expedientes);

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
