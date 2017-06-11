<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Persona;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class BusquedaController extends Controller
{

	public function index(Request $request){
     
		//dd(Auth::user()->idrol);

		//dd($request->all());
		$busqueda = $request->q ;
		$Personas=null;

		$nuevaCadena ="";
		for ($i=0; $i <strlen($busqueda) ; $i++) { 
			$t = $i +1;
			if( $t == strlen($busqueda)){
				$ascii = ord ($busqueda[$i]);
				$nuevaCadena = $nuevaCadena . $busqueda[$i];
			}else{
				$ascii = ord ($busqueda[$i]);
				$asciiSiguiente = ord ($busqueda[$i+1]);

				if($ascii == 32 && $asciiSiguiente == 32){
						
					}else{
					if ($i == 0 && $ascii==32) {
						# code...
					}else{
						$nuevaCadena = $nuevaCadena . $busqueda[$i];
					}

					
				}

			}

		}


		

		if($request->q == "" || $request->q == " ")	{
			$Personas = null;		
		}else{



			//$Personas = Persona::datos($request->q)->where('primernombre',"LIKE", "%$nuevaCadena%")->paginate(10);
			//$Personas = Persona::datos($request->q)->raw("where primernombre LIKE '%$t%'")->paginate(10);

			$sentencia = "select *from persona where primernombre like '%$nuevaCadena%' ";

			$persona = DB::select($sentencia);

			$currentPage = LengthAwarePaginator::resolveCurrentPage();
			$col = new Collection($persona);
			$perPage = 10;

			$currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();

			$Personas = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage, $currentPage,['path'=> LengthAwarePaginator::resolveCurrentPath()] );
			//$Personas = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage);

			//dd($Personas);
		}

		

	

        return view('busqueda.busqueda',compact('Personas'));

    }
}
