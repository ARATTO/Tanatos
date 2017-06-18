<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Persona;
use App\Municipio;
use App\Telefono;
use App\DetalleDireccion;
use App\Rol;
use App\EstadoCivil;
use App\HistorialClinico;
use App\Expediente;
use App\Hospital;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        $users->each(function($users){
            $users->roles = Rol::find($users->idrol);
            $users->personas = Persona::find($users->id);

        });

        //dd($users);

        return view('user.index')->with(['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $estadoCivil = EstadoCivil::all();
        $roles = Rol::where( 'nombrerol', '!=', 'Paciente' )->get();
        $municipio = Municipio::all();

        return view('user.crear')->with([
            'estadoCivil'=>$estadoCivil, 
            'roles'=>$roles,
            'municipio'=>$municipio,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        if($request->genero == 1){
            $genero = 'M';
        }else{
            $genero = 'F';
        }

        //Fill de User
        $user = new User();
        
        $user->fill($request->all());
        $user->estado = 1;
        $user->usuario = $request->primernombre . ' ' . $request->primerapellido;
        $user->password = bcrypt($request->dui);
        
        $user->save();

        //Fill de Telefono
        $telefono = new Telefono();
        $telefono->fill($request->all());

        $telefono->save();

        //Fill de DetalleDireccion
        $detalleDireccion = new DetalleDireccion();
        $detalleDireccion->fill($request->all());

        $detalleDireccion->save();

        //Fill Persona
        $persona = new Persona();

        $persona->fill($request->all());

        $persona->dui = $request->dui;
        $persona->iduser = $user->id;
        $persona->idestadocivil = $request->idestadocivil;
        $persona->idtelefono = $telefono->id;
        $persona->iddetalledireccion = $detalleDireccion->id;
        $persona->genero = $genero;
        
        $persona->save();

        Flash::info("Se ha registrado ".$user->usuario." de forma exitosa");

        //dd($request);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function crearPaciente(){

        $estadoCivil = EstadoCivil::all();
        $municipio = Municipio::all();

        return view('user.paciente')->with([
            'estadoCivil'=>$estadoCivil, 
            'municipio'=>$municipio,
        ]);

    }
    public function storePaciente(Request $request){

        //dd($request->all());
        $RolPaciente = DB::table('rol')->where('nombrerol', 'Paciente')->first();
        //dd($RolPaciente->id);

        if($request->genero == 1){
            $genero = 'M';
        }else{
            $genero = 'F';
        }

        //Fill de User
        $user = new User();
        
        $user->email = $request->email;
        $user->idrol = $RolPaciente->id;
        $user->estado = 1;
        $user->usuario = $request->primernombre . ' ' . $request->primerapellido;
        $user->password = bcrypt($request->dui);
        
        $user->save();

        //Fill de Telefono
        $telefono = new Telefono();
        $telefono->fill($request->all());

        $telefono->save();

        //Fill de DetalleDireccion
        $detalleDireccion = new DetalleDireccion();
        $detalleDireccion->fill($request->all());

        $detalleDireccion->save();

        //Fill Persona
        $persona = new Persona();

        $persona->fill($request->all());

        $persona->dui = $request->dui;
        $persona->iduser = $user->id;
        $persona->idestadocivil = $request->idestadocivil;
        $persona->idtelefono = $telefono->id;
        $persona->iddetalledireccion = $detalleDireccion->id;
        $persona->genero = $genero;
        
        $persona->save();

        //Fill Historial Clinico
        $historialClinico = new HistorialClinico();

        $historialClinico->fill($request->all());
        $historialClinico->save();

        //Fill Expediente
        $hospital = Hospital::find(1); //Busca el unico Hospital

        $expediente = new Expediente();
        $expediente->idpersona = $persona->id;
        $expediente->idhistorialclinico = $historialClinico->id;
        $expediente->idhospital = $hospital->id;

        $expediente->save();

        Flash::info("Se ha registrado el Paciente: ".$user->usuario." de forma exitosa");

        //dd($request);

        return view('home');
    }

    public function activar($id){
        $user = User::find($id);
        $user->estado = 1;
        $user->save();
        
        Flash::success("Se ha ACTIVADO ".$user->usuario." de forma exitosa");
        return redirect()->route('users.index');
    }

    public function inactivar($id){
        $user = User::find($id);
        $user->estado = 0;
        $user->save();

        Flash::danger("Se ha INACTIVADO ".$user->usuario." de forma exitosa");
        return redirect()->route('users.index');
    }
}