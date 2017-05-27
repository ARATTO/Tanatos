<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Doctor;
use GeneaLabs\Bones\Flash\Flash;
use App\Http\Controllers\Controller;
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
        
        return view('doctores.index')->with(['doctores'=>$doctores]);
    }

    //
    public function create()
    {
        return view('doctores.create');
    }

    public function store(Request $request)
    {
       // dd($request->all());

        Doctor::create($request->all());

        $doctores = Doctor::orderBy('id','ASC')->paginate(20);  

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
}