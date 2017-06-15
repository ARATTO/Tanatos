<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;    
use App\Expediente;
use App\CatalogoPrecio;
use App\bitacora;
use GeneaLabs\Bones\Flash\Flash;
use View;
use DateTime;
use DB;


class BitacoraIngresoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // dd($request->all());

        $expediente=null;

        if ($request->expediente>0) {
            $expediente = Expediente::expediente($request->expediente)->paginate(20);     

            $expediente->each(function($expediente){   
             $expediente->personas;
             $expediente->ingreso;
            }); 
        }
        

        //dd(Auth::user());
       
        //dd($expediente); 
        
        return view('bitacoraIngreso.index',compact('expediente'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiempo = explode(" ", $request->fechaingreso);


        $time = new DateTime($tiempo[0]);        
        $fecha = $time->format('Y-m-d');

        $time = new DateTime($tiempo[1]);        
        $hora = $time->format('H:m');

        $bitacora = new Bitacora();

        $bitacora->idingreso = $request->idingreso;
        $bitacora->descripcionbitacora = $request->descripcionbitacora;
        $bitacora->fechabitacora = $fecha;
        $bitacora->horabitacora = $hora;

        $bitacora->save();

        return redirect()->route('ingreso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('bitacoraIngreso.create',compact('id'));
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
