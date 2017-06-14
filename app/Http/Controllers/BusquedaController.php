<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Persona;
use App\Expediente;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Laracasts\Flash\Flash;

class BusquedaController extends Controller
{

	public function index(Request $request){
     
		//dd(Auth::user()->idrol);

		//dd($request->all());
		$busqueda = $request->q ;
		$Personas=null;

		$nuevaCadena ="";
		//metodo que borra espacios de mas
		for ($i=0; $i <strlen($busqueda) ; $i++) { 
			$t = $i +1;
			if( $t == strlen($busqueda)){
				$ascii = ord ($busqueda[$i]); //se obtiene el ascii de la cadena
				$nuevaCadena = $nuevaCadena . $busqueda[$i]; 
			}else{
				$ascii = ord ($busqueda[$i]); // se obtiene el ascii de la cadena
				$asciiSiguiente = ord ($busqueda[$i+1]); // se obtiene el siguiente ascii

				if($ascii == 32 && $asciiSiguiente == 32){ //compara si el ascii actual es espacio, y el siguiente tambien
									// si es cierto no pone el espacion en la nueva cadena
					}else{//de lo contrario pregunta si el primer caracter de la cadena y tiene espacio
					if ($i == 0 && $ascii==32) { 
						//no pone el espacio en la nueva cadena
					}else{
						$nuevaCadena = $nuevaCadena . $busqueda[$i]; //pone el espacio en la cadena
					}

					
				}

			}

		}

		$nuevaCadena =strtolower ( $nuevaCadena ); //convierte todo a minuscula

		$nuevaCadena = ucwords($nuevaCadena); //convierte primer caracter a mayuscula

		//dd($nuevaCadena);

		

		if($request->q == "" || $request->q == " " || $nuevaCadena == "" || $nuevaCadena == " ")	{
			$Personas = null;
			$porciones = explode(" ", $nuevaCadena);
			$sentencia = ""; 
			

			//dd($porciones);


			$valores = $request->criterio;		
		}else{

			$porciones = explode(" ", $nuevaCadena); // divide la cadena por palabras
			$sentencia = ""; 
			

			//dd($porciones);


			$valores = $request->criterio; //obtiene los criterios

			try{
				//$persona = Persona::select($sentencia); //DB::select($sentencia);

				$Personas = Persona::primernombre($nuevaCadena,$valores,$porciones)->paginate(10); //ejecuta la sentencia sql

				//dd($Personas);
				
		        $Personas->each(function($Personas){   
		            $Personas->expediente;
		            
		        });

		      // dd($Personas);
			} catch(\Illuminate\Database\QueryException $ex){ //si hay un error en la sentncia entonces no envia nada

				Flash::danger("Se ingreso datos incorrectos, vea el ejemplo al final en el icono (i) ");


                return redirect()->route('busqueda');
			}


			}


		

		//dd($Personas);

	

        return view('busqueda.busqueda',compact('Personas'));

    }
}
