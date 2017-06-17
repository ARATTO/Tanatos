<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Rol;
use App\EstadoCivil;
use App\Municipio;
use App\Telefono;
use App\DetalleDireccion;
use App\Persona;
use App\HistorialClinico;
use App\Expediente;
use App\Hospital;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => 'required|confirmed|min:6',
            'terms' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {
        //no hace nada papu
        //dd($request->all());
        $RolPaciente = DB::table('rol')->where('nombrerol', 'Paciente')->first();
        //dd($RolPaciente->id);

        if($data['genero'] == 1){
            $genero = 'M';
        }else{
            $genero = 'F';
        }

        //Fill de User
        $user = new User();
        
        $user->email = $data['email'];
        $user->idrol = $RolPaciente->id;
        $user->estado = 1;
        $user->usuario = $data['primernombre'] . ' ' . $data['primerapellido'];
        $user->password = bcrypt($data['password']);
        
        $user->save();

        //Fill de Telefono
        $telefono = new Telefono();
        $telefono->casatelefono = $data['casatelefono'];
        $telefono->trabajotelefono = $data['trabajotelefono'];
        $telefono->celulartelefono = $data['celulartelefono'];

        $telefono->save();

        //Fill de DetalleDireccion
        $detalleDireccion = new DetalleDireccion();
        $detalleDireccion->idmunicipio = $data['idmunicipio'];
        $detalleDireccion->calle = $data['calle'];
        $detalleDireccion->pasaje = $data['pasaje'];
        $detalleDireccion->casa = $data['casa'];
        $detalleDireccion->apartamento = $data['apartamento'];
        $detalleDireccion->colonia = $data['colonia'];

        $detalleDireccion->save();

        //Fill Persona
        $persona = new Persona();
        
        $persona->iduser = $user->id;
        $persona->idestadocivil = $data['idestadocivil'];
        $persona->idtelefono = $telefono->id;
        $persona->iddetalledireccion = $detalleDireccion->id;
        $persona->dui = $data['dui'];
        $persona->primernombre = $data['primernombre'];
        $persona->segundonombre = $data['segundonombre'];
        $persona->primerapellido = $data['primerapellido'];
        $persona->segundoapellido = $data['segundoapellido'];
        $persona->genero = $genero;
        $persona->fechanacimiento = $data['fechanacimiento'];
        
        $persona->save();

        //Fill Historial Clinico
        $historialClinico = new HistorialClinico();
        $historialClinico->nombremadre = $data['nombremadre'];
        $historialClinico->nombrepadre = $data['nombrepadre'];
        $historialClinico->antesedentes =  $data['antesedentes'];
        
        $historialClinico->save();

        //Fill Expediente
        $hospital = Hospital::find(1); //Busca el unico Hospital

        $expediente = new Expediente();
        $expediente->idpersona = $persona->id;
        $expediente->idhistorialclinico = $historialClinico->id;
        $expediente->idhospital = $hospital->id;

        $expediente->save();

        //dd($request);

        //return view('home');
    }
}
