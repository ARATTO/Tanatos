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

/*
*
* FIN RUTAS ALAM
*
*/

//////////////////////////////////////////////////////////////////////////////////
