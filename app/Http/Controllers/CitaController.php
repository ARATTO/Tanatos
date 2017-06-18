<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use App\Http\Requests;
use DateTime;
use DateInterval;
use App\Especialidad;
use App\Expediente;
use App\Doctor;
use App\Horario;
use GeneaLabs\Bones\Flash\Flash;
use View;

class CitaController extends Controller
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
    public function index()
    {
        $citas = Cita::select('id','title','start','color','idexpediente','iddoctor')->get();
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

     public function mostrar()
    {
        $especialidades = Especialidad::orderBy('id')->lists('nombreespecialidad','id');
        
        $doctores = Doctor::orderBy('id')->lists('nombredoctor','id');
       /*
        $doctores->each(function($doctores){
            $doctores->horario;
        });*/
        //dd($doctores);
        
        return View::make('citas/calendar')->with('especialidades',$especialidades)->with('doctores',$doctores);
       
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

                    if(CitaController::verificarHorarioDoctor($request)){
                        try{
                            $cita->fin=$fechaFin;
                            $cita->title=Especialidad::find($request->idespecialidad)->nombreespecialidad;
                            try{
                                $cita->save();
                                Flash::success(trans('eetntmessage.CitaGuardada'));

                            }catch(\Illuminate\Database\QueryException $e2){
                                
                                Flash::danger($e2->errorInfo[2]);

                            }
                            Flash::success(trans('eetntmessage.CitaGuardada'));
                        }catch(Exception $e){
                            Flash::danger($e->getMessage());
                        }
                    }else{
                        Flash::danger(trans('eetntmessage.DoctorNoDisponible'));
                        
                    }
                 }
            }

            return redirect()->route('calendar'); 
        }else{
            Flash::danger("No se encontro el expediente: ".$request->idexpediente);
            return redirect()->route('calendar'); 
        }
       
    }





    public  function verificarHorarioDoctor(Request $request){
            //Obtencion del horario del doctor segun el request
            $iddoctor=$request->iddoctor;
            $horario=Horario::where('iddoctor',$iddoctor)->first();
            //Horarios en los que esta disponible el doctor
            $timestartdoctor=$horario->horainicio;
            $timeendtdoctor=$horario->horafin;
        // dd($timeendtdoctor);
            
            //Horarios en que se solicita la cita
            $fechaInicio=$request->start;
            $minutes_to_add = 30;
            $time = new DateTime($fechaInicio);
            $timestart=$time->format('H:i:s');
            $timeend=$time->add(new DateInterval('PT' . $minutes_to_add . 'M'))->format('H:i:s');
            
            //Verificacion de horarios segun disponibilidad del doctor
            
            if($timestart>=$timestartdoctor&&$timeend<=$timeendtdoctor){  
                return true;

            }else{
                return false;
                        
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