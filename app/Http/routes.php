<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
*
* RUTAS GENERICAS
*
*/
Route::auth();
Route::get('/admin', 'HomeController@index');
/*
*
* RUTAS GENERICAS
*
*/

//////////////////////////////////////////////////////////////////////////////////
/*
*
* RUTAS MOTTO
*
*/
/*
        * Inicio Rutas para User
        */
        Route::resource('users','UserController');
        Route::get('user/paciente', [
            'as' => 'users.paciente',
            'uses' => 'UserController@crearPaciente'
        ]);
        Route::post('user/storepaciente', [
            'as' => 'users.storepaciente',
            'uses' => 'UserController@storePaciente'
        ]);
        /*
        * Fin Rutas para User
        */
/*
*
* FIN RUTAS MOTTO
*
*/

//////////////////////////////////////////////////////////////////////////////////

/*
*
* RUTAS RODRIGO
*
*/
	Route::resource('medicamentos','MedicamentosController');

	Route::resource('cobro','CobroController');
	Route::resource('ingreso','IngresoController');
	Route::resource('bitacoraIngreso','BitacoraIngresoController');

	Route::get('busqueda',[
		'uses' => 'BusquedaController@index',
		'as' => 'busqueda'
			]);

	Route::get('servicios/{id}',[
		'uses' => 'CobroController@servicios',
		'as' => 'servicios'
	]);
/*
* FIN RUTAS RODRIGO
*
*/

//////////////////////////////////////////////////////////////////////////////////
/*
*
* RUTAS ELIAS
*
*/
//----------------------------Calendario
Route::get('/calendar', [
            'as' => 'calendar',
            'uses' => 'CitaController@mostrar'
        ]);

Route::resource('citas','CitaController');

Route::get('/doctores/json',[
			'as'	=> 	'doctores.json',
			'uses'	=>	'DoctorController@doctoresJSON'
]);

/*
*
* FIN RUTAS ELIAS
*
*/

//////////////////////////////////////////////////////////////////////////////////
/*
*
* RUTAS LOBO
*
*/
/*Route::get('expediente/create','expedienteController@create');
	Route::get('expediente/show','expedienteController@show');
	Route::get('Expedientes',[
	        'uses' => 'expedienteController@index',
	        'as' => 'expediente.index'
	        ]);
	Route::get('mostrarExpedientes/{expediente}/vista', [
	    'uses' => 'expedienteController@verExpedientes', 
	    'as'    => 'expediente.vista'
	    ]);
	Route::get('mostrarExpedientes/{id}/destroy',[
	        'uses' => 'expedienteController@destroy',
	        'as' => 'expediente.destroy'
	        ]);*/

	
	Route::resource('expediente','expedienteController');

	Route::get('mostrarExpedientes/{expediente}/vista', [
	    'uses' => 'expedienteController@verExpedientes', 
	    'as'    => 'expediente.vista'
	    ]);

	Route::get('mostrarExpedientes/{id}/destroy',[
	        'uses' => 'expedienteController@destroy',
	        'as' => 'expediente.destroy'
	        ]);
	
	//consultas y diagnostico

	Route::resource('diagnostico','ConsultaController');

	Route::get('citasdehoy',[
	        'uses' => 'ConsultaController@index',
	        'as' => 'citasdehoy'
	        ]);

	Route::get('examenespendientes', [
	    'uses' => 'ConsultaController@VerCitasFinalizadas', 
	    'as'    => 'consulta.citasdelpaciente'
	    ]);

	Route::get('examenespendientes/{id}',[
	        'uses' => 'ConsultaController@VerExamenesPendientes',
	        'as' => 'examenespendientes'
	        ]);

	Route::get('consultas/{id}', [
	    'uses' => 'ConsultaController@show', 
	    'as'    => 'consultas'
	    ]);




/*
*
* FIN RUTAS LOBO
*
*/

//////////////////////////////////////////////////////////////////////////////////
/*
*
* RUTAS ALAM
*
*/
	Route::resource('doctores','DoctorController');
	Route::post('send', ['as' => 'send', 'uses' => 'CorreoController@send'] );
	Route::get('contact', ['as' => 'contact', 'uses' => 'CorreoController@index'] );
/*
*
* FIN RUTAS ALAM
*
*/

//////////////////////////////////////////////////////////////////////////////////
