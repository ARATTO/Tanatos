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

	Route::get('busqueda',[
		'uses' => 'BusquedaController@index',
		'as' => 'busqueda'
			]);
/*
*
* FIN RUTAS RODRIGO
*
*/

//////////////////////////////////////////////////////////////////////////////////
/*
*
* RUTAS ELIAS
*
*/
Route::get('/calendar', function () {
    return view('citas/calendar');
})->name('calendar');


Route::resource('citas','CitaController');
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

	Route::get('examenespendientes', [
	    'uses' => 'ConsultaController@VerExamenesPendientes', 
	    'as'    => 'consulta.examenesexpedientes'
	    ]);

	Route::get('resultadosexamenes',[
	        'uses' => 'ConsultaController@RegistrarResultadosExamenes',
	        'as' => 'consulta.resultadosexamenes'
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
