<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use App\Http\Requests;
use DateTime;
use DateInterval;
use App\Expediente;
use GeneaLabs\Bones\Flash\Flash;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::select('id','title','start','color','idexpediente')->get();
        return Response()->json($citas);
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
        //dd($request->all());
        $expe = Expediente::find($request->idexpediente);
        //dd($expe);
        if ($expe !=null) {//codigo si encuentra el expediente
                
            $cita = new  Cita();
            $cita->fill($request->all());

            //Verificacion de horarios utilizados con otras citas
            $fechaInicio=$cita->start;
            $minutes_to_add = 30;
            $time = new DateTime($fechaInicio);
            $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
            $fechaFin = $time->format('Y-m-d H:i');
           

            if(\DB::table('cita')->wherebetween('start',[$fechaInicio,$fechaFin])->orWhereBetween('fin',[$fechaInicio,$fechaFin])->count()){    
                Flash::danger(trans('eetntmessage.ErrorAlGuardar'));
            }else{
                 if(\DB::table('cita')->where('start','<',$fechaInicio)->Where('fin','>',$fechaFin)->count()){
                    Flash::danger(trans('eetntmessage.ErrorAlGuardar'));
                    
                 }else{
                    try{
                        $cita->fin=$fechaFin;
                        $cita->save();
                        Flash::success(trans('eetntmessage.CitaGuardada'));
                    }catch(Exception $e){
                        Flash::danger($e->getMessage());
                    }
                 }
            }

            return redirect()->route('calendar'); 
        }else{
            Flash::danger("No se encontro el expediente: ".$request->idexpediente);
            return redirect()->route('calendar'); 
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        
        try{
           $cita = Cita::find($id);
            $cita->delete();
            return response('eliminado',200);
        }catch(Exception $e){
            return response('fallo',500);
        }
    }
}
