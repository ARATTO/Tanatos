<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Persona;
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

		$nuevaCadena =strtolower ( $nuevaCadena ); //convierte todo a minuscula

		$nuevaCadena = ucwords($nuevaCadena); //convierte primer caracter a mayuscula

		//dd($nuevaCadena);

		

		if($request->q == "" || $request->q == " " || $nuevaCadena == "" || $nuevaCadena == " ")	{
			$Personas = null;		
		}else{

			$porciones = explode(" ", $nuevaCadena);
			$sentencia = ""; 
			

			//dd($request->all());


			$valores = $request->criterio;

			$sentencia = "select *from persona ";

			for ($i=0; $i <count($valores) ; $i++) { 
				if($valores[$i] == 6){
					$sentencia = $sentencia . "inner join  expediente on persona.id = expediente.idpersona where ";
				}
			}

			if(strlen($sentencia) < 25){
				$sentencia = $sentencia . " where ";
			}


			for ($i=0; $i <count($valores) ; $i++) { 
				
				switch ($valores[$i]) {
					case 1:
					for ($k=0; $k <count($porciones);  $k++) { 
						$sentencia = $sentencia ." (primernombre like '%$porciones[$k]%' ) ";

						if(($k+1) < count($porciones)){
							$sentencia = $sentencia . " OR";
						}
					}
						
					break;
					case 2:
					
					for ($k=0; $k <count($porciones);  $k++) { 

						if(($k+1) <= count($porciones)){
							$sentencia = $sentencia . " OR";
						}

						$sentencia = $sentencia ." (segundonombre like '%$porciones[$k]%' ) ";
					}

					break;
					case 3:
				
					for ($k=0; $k <count($porciones);  $k++) { 

						if(($k+1) <= count($porciones)){
							$sentencia = $sentencia . " OR";
						}

						$sentencia = $sentencia ." (primerapellido like '%$porciones[$k]%' ) ";
					}


					break;
					case 4:
					for ($k=0; $k <count($porciones);  $k++) { 

						if(($k+1) <= count($porciones)){
							$sentencia = $sentencia . " OR";
						}

						$sentencia = $sentencia ." (segundoapellido like '%$porciones[$k]%' ) ";
					}
					break;

					case 5:
					for ($k=0; $k <count($porciones);  $k++) { 

						if(($k+1) <= count($porciones)){
							$sentencia = $sentencia . " OR";
						}

						$sentencia = $sentencia ." (fechanacimiento = '$porciones[$k]' ) ";


					$sentencia = $sentencia ." OR ( extract(year from  timestamp '$porciones[$k]') = extract(year from fechanacimiento))";
					}

					break;					

				}
			}

			

			//dd($sentencia);
			try{
				$persona = DB::select($sentencia);
			} catch(\Illuminate\Database\QueryException $ex){ //si hay un error en la sentncia entonces no envia nada

				Flash::danger("Se ingreso datos incorrectos, vea el ejemplo al final en el icono (i) ");


                return redirect()->route('busqueda');
			}
			

			dd($persona);

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
