<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Doctor;
use App\Especialidad;
use App\Persona;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Laracasts\Flash\Flash;

use View;


use DB;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        //$personas1 = Persona::select(DB::raw('CONCAT(primernombre, segundonombre, primerapellido, segundoapellido) as nombredoctor', 'id'))->join("USER", "persona.iduser",'=', "USER.id")->where('idrol', 4)->orderBy('persona.id')->pluck('id');

        $otro = '"USER"';
        $otro2 = " ";
        //dd($otro);

        $variable = "select persona.id, CONCAT(primernombre, ' ', segundonombre, ' ',  primerapellido, ' ', segundoapellido) as nombredoctor
from persona inner join public.". "$otro on persona.iduser = ". "$otro.id
where". "$otro.idrol = 4 order by persona.id";

        $personas1 = DB::select($variable);
        //dd($personas1);
        $personas1 = new Collection($personas1);
       // $personas1 = (string) $personas1;
        //dd($personas1);
        //$personas1 = Persona::orderBy('id')->get();
        //$personas1 = $personas1->lists('NombreCompletoDoctor', 'id');
        //$personas1 = Persona::select('id', '')
        //$personas2 = Persona::orderBy('id')->lists('primernombre', 'id');

        return View::make('doctores.create')->with('especialidades',$especialidades)->with('personas1',$personas1);
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $nombre = Persona::find($request->nombredoctor); //datos del doctor
       

        //Doctor::create($request->all());

        $doctor = new Doctor();

        $doctor->idpersona = $nombre->id;
        $doctor->idespecialidad = $request->idespecialidad;
        $doctor->nombredoctor = $nombre->primernombre . " " . $nombre->segundonombre . " " . $nombre->primerapellido . " " . $nombre->segundoapellido;
        $doctor->esemergencia = $request->esemergencia;

        

        $doctor->save();
        
        $doctores = Doctor::orderBy('id','ASC')->paginate(20);
        //dd($doctores);
        //$doctores = Doctor::first();

        $doctores->each(function($doctores){   
            $doctores->especialidades;
            $doctores->personas1;
        });

        /*$doctores->idpersona = $request->idpersona;
        $doctores->idespecialidad = $request->idespecialidad;
        $doctores->nombredoctor = $request->nombredoctor;

        $doctores->save();*/

        //dd($doctores);



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