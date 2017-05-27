<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Rol;
use App\EstadoCivil;
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
        $roles = Rol::all();

        return view('user.crear')->with(['estadoCivil'=>$estadoCivil, 'roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->genero == 1){
            $genero = 'M';
        }else{
            $genero = 'F';
        }

        $user = new User();
        
        $user->fill($request->all());
        $user->genero = $genero;
        $user->password = bcrypt($request->telefono);
        
        $user->save();

        Flash::info("Se ha registrado ".$user->nombres." de forma exitosa");

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

        return view('user.paciente')->with(['estadoCivil'=>$estadoCivil]);
    }
    public function storePaciente(Request $request){

        if($request->genero == 1){
            $genero = 'M';
        }else{
            $genero = 'F';
        }

        $rol = Rol::where('nombrerol', 'Paciente')->first();

        $user = new User();
        
        $user->fill($request->all());
        $user->idrol = $rol->id;
        $user->genero = $genero;
        $user->password = bcrypt($request->telefono);
        
        $user->save();

        Flash::info("Se ha registrado ".$user->nombres." de forma exitosa");

        //dd($request);

        return view('home');
    }
}
