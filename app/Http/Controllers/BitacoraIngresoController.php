<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;    
use App\Expediente;
use App\CatalogoPrecio;
use App\Bitacora;
use GeneaLabs\Bones\Flash\Flash;
use View;
use DateTime;
use DB;


class BitacoraIngresoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //dd($request->all());

        $bitacora = null;
  

        if ($request->idingreso>0) {
            $bitacora = Bitacora::bitacora($request->idingreso)->paginate(20);     

            $bitacora->each(function($bitacora){   
                $bitacora->ingresos;
            }); 
        }
        

        //dd(Auth::user());
       
        //dd($bitacora); 
        
        return view('bitacoraIngreso.index',compact('bitacora'));
        
        
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
        $hora = $time->format('H:i:s');

        $bitacora = new Bitacora();

        $bitacora->idingreso = $request->idingreso;
        $bitacora->descripcionbitacora = $request->descripcionbitacora;
        $bitacora->fechabitacora = $fecha;
        $bitacora->horabitacora = $hora;

        $bitacora->save();

        Flash::success("Se ha ingresado la bitacora con exito");

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
        $bitacora = Bitacora::find($id);

        return view ('bitacoraIngreso.edit',compact('bitacora'));
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
        


        $tiempo = explode(" ", $request->fechaingreso);


        $time = new DateTime($tiempo[0]);        
        $fecha = $time->format('Y-m-d');

        $time = new DateTime($tiempo[1]);        

       
        $hora = $time->format('H:i:s');

        $bitacora = Bitacora::find($id);

        $bitacora->descripcionbitacora = $request->descripcionbitacora;
        $bitacora->fechabitacora = $fecha;
        $bitacora->horabitacora = $hora;

        //dd($bitacora);

        $bitacora->save();

        Flash::success("Se ha actualizado la bitacora: ".$bitacora->id. " con exito");

        return redirect()->route('bitacoraIngreso.index',['idingreso'=>$bitacora->idingreso]);

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
