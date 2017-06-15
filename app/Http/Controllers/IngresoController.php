<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Expediente;
use App\CatalogoPrecio;
use GeneaLabs\Bones\Flash\Flash;
use View;
use App\Hospital;
use App\Doctor;
use App\Camilla;
use App\Sala;
use App\Ingreso;
use App\Persona;
use App\User;
use DateTime;
use DB;
use Illuminate\Support\Facades\Auth;  

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //dd($request->ingreso);
        $ingreso=null;

        $user = User::where('id',Auth::user()->id)->get();

        if(count($user)>0){
            $persona = Persona::where('iduser',$user[0]->id)->get();

            if (count($persona)>0) {
                $doctor = Doctor::where('idpersona',$persona[0]->id)->get();

                if (count($doctor)>0) {
                    $ingreso = Ingreso::ingreso($request->ingreso)->where('iddoctor',$doctor[0]->id)->paginate(10);

                    $ingreso->each(function($ingreso){   
                     $ingreso->expedientes->personas;
                    });                     
                }
            }
        }


        //dd($ingreso);

        return view('ingreso.index',compact('ingreso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingreso =  new Ingreso();

        $ingreso->iddoctor = $request->iddoctor;
        $ingreso->idexpediente = $request->idexpediente;
        $ingreso->idcamilla = $request->idcamilla;
        $ingreso->idsala = $request->idsala;

         $fechaInicio=$request->fechaingreso;
         $time = new DateTime($fechaInicio);        
         $fechaingreso = $time->format('Y-m-d H:i');

         $fechaSalida=$request->fechasalida;
         $time = new DateTime($fechaSalida);
         $fechasalida = $time->format('Y-m-d H:i');

    

        $ingreso->fechaingreso = $fechaingreso;
        $ingreso->fechasalida = $fechasalida;

        $ingreso->save();

                $dia=date("d");
        $day= (string) $dia;
        //dd($consultamedica);
        
        
        return redirect()->route('citasdehoy');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                

        
            $expediente = Expediente::where('id',$id)->paginate(1);

            $expediente->each(function($expediente){   
             $expediente->personas->detallesDirecciones->municipios;
             $expediente->personas->telefonos;
             $expediente->personas->users;
             $expediente->personas->estadosCiviles;
             $expediente->historialesClinicos;
             $expediente->ingreso;

            });


            //$hospital  = Hospital::where('id',$expediente[0]->idhospital )->get();
            $hospital  = Hospital::all();
            $doctor  = Doctor::all();
            $camilla = Camilla::where('estaenuso',FALSE)->get();
            $sala = Sala::all();

        //dd(Auth::user());
       
        //dd($sala); 
        
        return view('ingreso.create',compact('expediente','hospital','doctor','camilla','sala'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
