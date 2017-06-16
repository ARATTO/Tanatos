<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Expediente;
use App\CatalogoPrecio;
use GeneaLabs\Bones\Flash\Flash;
use View;

class CobroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $expediente = null;

        if($request->expediente>0){

            $expediente = Expediente::expediente($request->expediente)->paginate(20); 
            
            $expediente->each(function($expediente){   
                $expediente->personas;
            });
        }
        $precio = CatalogoPrecio::all();
       
       //dd($expediente);
       
        
        return view('cobro.index',compact('expediente'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

            $expediente = Expediente::where('id',$id)->paginate(10);

            $expediente->each(function($expediente){
                $expediente->cita;
                foreach ($expediente->cita as $consulta => $value) {
                  
                    $value->consultaMedica;       
                }
                
            });

            //dd($expediente);
            
              $precio = CatalogoPrecio::all();

              return view('cobro.create',compact('expediente'));
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
}
