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
		Route::get('users/{id}/activar', [
            'as' => 'users.activar',
            'uses' => 'UserController@activar'
        ]);
        Route::get('users/{id}/inactivar', [
            'as' => 'users.inactivar',
            'uses' => 'UserController@inactivar'
        ]);
        /*
        * Fin Rutas para User
        */

		/*
		* Inicio Rutas para Examen Fisico
        */
		Route::resource('examenesFisicos','ExamenFisicoController');
		/*
        * Fin Rutas para Examen Fisico
        */

		/*
		* Inicio Rutas para Examen Clinico
        */
		Route::resource('examenesClinicos','ExamenClinicoController');
		/*
        * Fin Rutas para Examen Clinico
        */

		/*
		* Inicio Rutas para DEMO
        */
		Route::resource('demos','DemoController');
		/*
        * Fin Rutas para DEMO
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

	Route::get('factura/{id}',[
		'uses' => 'CobroController@servicios',
		'as' => 'factura'
	]);

	Route::post('crearfactura',[
		'uses' => 'CobroController@store2',
		'as' => 'crearfactura'
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

	Route::get('detalleExamenFisico/{id}',[
	        'uses' => 'ConsultaController@detalleExamenFisico',
	        'as' => 'detalleExamenFisico'
	        ]);

	Route::put('redExamenFisico/{id}',[
	        'uses' => 'ConsultaController@redExamenFisico',
	        'as' => 'redExamenFisico'
	        ]);

	Route::get('detalleExamenClinico/{id}',[
	        'uses' => 'ConsultaController@detalleExamenClinico',
	        'as' => 'detalleExamenClinico'
	        ]);

	Route::put('redExamenClinico/{id}',[
	        'uses' => 'ConsultaController@redExamenClinico',
	        'as' => 'redExamenClinico'
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
