<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Doctor;
use App\Especialidad;
use App\Persona;

use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

use View;


use DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $doctores = Doctor::Nombre($request->name)->orderBy('id', 'ASC')->paginate(15); 

        $doctores->each(function($doctores){
            $doctores->especialidades = Especialidad::find($doctores->idespecialidad);
            $doctores->personas = Persona::find($doctores->idpersona);
        });

        return view('doctores.index')->with(['doctores'=>$doctores]);
    }

    //
    public function create()
    {
        $especialidades = Especialidad::orderBy('id')->lists('nombreespecialidad','id');
        //$personas1 = Persona::orderBy('id')->lists('primerapellido', 'id');
        //$personas1 = Persona::selectRaw('CONCAT(primerapellido, " ", primernombre) as nombredoctor', 'id')->orderBy('id')->lists('nombredoctor', 'id');
        $personas1 = Persona::orderBy('id')->select(DB::raw('CONCAT(primernombre, segundonombre, primerapellido, segundoapellido) as nombredctor', 'id'))->pluck('nombredoctor', 'id');
        //$personas1 = Persona::orderBy('id')->get();
        //$personas1 = $personas1->lists('NombreCompletoDoctor', 'id');
        //$personas1 = Persona::select('id', '')
        $personas2 = Persona::orderBy('id')->lists('primernombre', 'id');

        dd($personas1);

        return View::make('doctores.create')->with('especialidades',$especialidades)->with('personas1',$personas1);
    }

    public function store(Request $request)
    {
       dd($request->all());

        Doctor::create($request->all());

        $doctores = Doctor::orderBy('id','ASC')->paginate(20);

        $doctores->each(function($doctores){   
            $doctores->especialidades;
            $doctores->personas1;
        });  

        Flash::success("Se ha guardado el doctor: ".$request->nombredoctor." con exito");

        return redirect()->route('doctores.index')->with('doctores',$doctores);
        
    }   

    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        Flash::error('El doctor ' . $doctor->nombredoctor . ' ha sido borrado exitosamente');
        return redirect()->route('doctores.index');
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);

        return view('doctores.edit')->with('doctor', $doctor);

    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $doctor->nombredoctor = $request->nombredoctor;
        $doctor->especialidad = $request->especialidad;
        $doctor->esemergencia = $request->esemergencia;

        
        //$tutor->fill($request->all());
        $doctor->save();
        Flash::warning('El doctor con id ' . $doctor->id . ' fue actualizado.');
        return redirect()->route('doctores.index');
    }

    public function show($id)
    {

    }

    //Funcion creada por EE 07/06/2017
    public function doctoresJSON(){
        $doctores = Doctor::select('id','nombredoctor')->get();
        return Response()->json($doctores);
    }
    //---Fin de la funcion de EE
}