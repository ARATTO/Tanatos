<?php

namespace App\Http\Controllers;

use App\ExamenFisico;
use App\ConsultaMedica;
use App\TipoExamenFisico;
use App\Cita;
use App\Expediente;
use App\ResExamenFisico;
use App\Imagen;
use App\Video;
use App\Audio;
use Illuminate\Http\Request;

use App\Http\Requests;

class ExamenFisicoController extends Controller
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
        //dd('muestra examenes');

        $examenesFisicos = ExamenFisico::all();

        foreach($examenesFisicos as $examenFisico){
                $examenFisico->consultaMedica = ConsultaMedica::find($examenFisico->idconsultamedica);
                $examenFisico->tipoExamenFisico = TipoExamenFisico::find($examenFisico->idtipoexamenfisico);
                $examenFisico->cita = Cita::find($examenFisico->consultaMedica->idcita);
                $examenFisico->expediente = Expediente::find($examenFisico->cita->idexpediente);
        }

        //dd($examenesFisicos);
        return view('examenFisico.index')->with(['examenesFisicos' => $examenesFisicos]);
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

        $storage = 0;
        $examenFisico = ExamenFisico::find($request->idexamenfisico);
        
        $resExamenFisico = new ResExamenFisico();
        $resExamenFisico->resultadofisico = $request->resultadofisico;
        //Imagen
        if($request->file('img'))
        {
          //Hay Imagen
          $archivo = $request->file('img');
          $nombreimagen = 'tanatos' . time() . '.' . $archivo->getClientOriginalExtension();
          $path = public_path() . "/storage/imagen";
          $archivo->move($path, $nombreimagen);

          $imagen = new Imagen();

          $imagen->nombreimagen = $nombreimagen;
          $imagen->extensionimagen = $archivo->getClientOriginalExtension();
          $imagen->imagen = $path;
  
          $imagen->save();

          $resExamenFisico->idimagen = $imagen->id;
          $storage = 1;
        }

        //Video
        if($request->file('video'))
        {
          //Hay Video
          $archivo = $request->file('video');
          $nombrevideo = 'tanatos' . time() . '.' . $archivo->getClientOriginalExtension();
          $path = public_path() . "/storage/video";
          $archivo->move($path, $nombrevideo);

          $video = new Video();

          $video->nombrevideo = $nombrevideo;
          $video->extensionvideo = $archivo->getClientOriginalExtension();
          $video->video = $path;
  
          $video->save();

          $resExamenFisico->idvideo = $video->id;
          $storage = 1;
        }

        //Video
        if($request->file('audio'))
        {
          //Hay Video
          $archivo = $request->file('audio');
          $nombreaudio = 'tanatos' . time() . '.' . $archivo->getClientOriginalExtension();
          $path = public_path() . "/storage/audio";
          $archivo->move($path, $nombreaudio);

          $audio = new Audio();

          $audio->nombreaudio = $nombreaudio;
          $audio->extensionaudio = $archivo->getClientOriginalExtension();
          $audio->audio = $path;
  
          $audio->save();

          $resExamenFisico->idaudio = $audio->id;
          $storage = 1;
        }
        
        //$medalla->IMAGENMEDALLA = $nombreFoto;
        if($storage == 1){
            //Si se almaceno algo entonces guardar
            $resExamenFisico->save();
            
            $examenFisico->idresultadoexamenfisico = $resExamenFisico->id;
            $examenFisico->save();

        }

        return redirect()->route('examenesFisicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exFisico = ExamenFisico::find($id);

      
        $exFisico->consultaMedica = ConsultaMedica::find($exFisico->idconsultamedica);
        $exFisico->tipoExamenFisico = TipoExamenFisico::find($exFisico->idtipoexamenfisico);
        $exFisico->cita = Cita::find($exFisico->consultaMedica->idcita);
        $exFisico->expediente = Expediente::find($exFisico->cita->idexpediente);
        
        
        return view('examenFisico.show')->with(['exFisico' => $exFisico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exFisico = ExamenFisico::find($id);

      
        $exFisico->consultaMedica = ConsultaMedica::find($exFisico->idconsultamedica);
        $exFisico->tipoExamenFisico = TipoExamenFisico::find($exFisico->idtipoexamenfisico);
        $exFisico->cita = Cita::find($exFisico->consultaMedica->idcita);
        $exFisico->expediente = Expediente::find($exFisico->cita->idexpediente);
        $exFisico->resExamenFisico = ResExamenFisico::find($exFisico->idresultadoexamenfisico);

        if($exFisico->resExamenFisico->idimagen != null){
            $exFisico->imagen = Imagen::find($exFisico->resExamenFisico->idimagen);
        }
        if($exFisico->resExamenFisico->idvideo != null){
            $exFisico->video = Video::find($exFisico->resExamenFisico->idvideo);
        }
        if($exFisico->resExamenFisico->idaudio != null){
            $exFisico->audio = Audio::find($exFisico->resExamenFisico->idaudio);
        }
        
        return view('examenFisico.edit')->with(['exFisico' => $exFisico]);
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
        return redirect()->route('examenesFisicos.index');
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

    //No se usa borrar
    public function VerExamenPaciente(){
        
        $user = User::where('id',Auth::user()->id)->get();

        if(count($user)>0){
            $persona=Persona::where('iduser',$user[0]->id)->get();
            if(count($persona)>0){
                $expediente=Expediente::where('idpersona',$persona[0]->id)->get();
                //dd($expediente);
                if(count($expediente)>0){
                    $cita=Cita::where('idexpediente',$expediente[0]->id)->where('finalizada',true)->get();
                    //dd($cita);
                    if(count($cita)>0){
                        $consultaMedica=ConsultaMedica::where('idcita',$cita[0]->id)->get();
                        if(count($consultaMedica)>0){
                            $examenFisico = ExamenFisico::where('idconsultamedica',$consultaMedica[0]->id)->get();
                        }
                    }
                    
                    //dd($cita);
                    return view('consulta.citasdelpaciente')->with('cita',$cita);
                }
            }
            
        }


    }
}
