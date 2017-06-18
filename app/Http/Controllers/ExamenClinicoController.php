<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ExamenClinico;
use App\ConsultaMedica;
use App\TipoExamenClinico;
use App\Cita;
use App\Expediente;
use App\ResultadoExamenClinico;
use App\Http\Requests;

class ExamenClinicoController extends Controller
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

        $examenesClinicos = ExamenClinico::all();

        foreach($examenesClinicos as $examenClinico){
                $examenClinico->consultaMedica = ConsultaMedica::find($examenClinico->idconsultamedica);
                $examenClinico->tipoExamenClinico = TipoExamenClinico::find($examenClinico->idtipoexamenclinico);
                $examenClinico->cita = Cita::find($examenClinico->consultaMedica->idcita);
                $examenClinico->expediente = Expediente::find($examenClinico->cita->idexpediente);
        }

        if(count($examenesClinicos) == 0){
            $examenesClinicos = null;
        }

        //dd($examenesClinicos);

        return view('examenClinico.index')->with(['examenesClinicos' => $examenesClinicos]);
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
        $examenClinico = ExamenClinico::find($request->idexamenclinico);
        
        $resExamenClinico = new ResultadoExamenClinico();
        $resExamenClinico->resultadoclinico = $request->resultadoclinico;
        $resExamenClinico->save();
            
        $examenClinico->idresultadoexamenclinico = $resExamenClinico->id;
        $examenClinico->save();

        return redirect()->route('examenesClinicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exClinico = ExamenClinico::find($id);

        $exClinico->consultaMedica = ConsultaMedica::find($exClinico->idconsultamedica);
        $exClinico->tipoExamenClinico = TipoExamenClinico::find($exClinico->idtipoexamenclinico);
        $exClinico->cita = Cita::find($exClinico->consultaMedica->idcita);
        $exClinico->expediente = Expediente::find($exClinico->cita->idexpediente);
        
        return view('examenClinico.show')->with(['exClinico' => $exClinico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exClinico = ExamenClinico::find($id);

        $exClinico->consultaMedica = ConsultaMedica::find($exClinico->idconsultamedica);
        $exClinico->tipoExamenClinico = TipoExamenClinico::find($exClinico->idtipoexamenclinico);
        $exClinico->cita = Cita::find($exClinico->consultaMedica->idcita);
        $exClinico->expediente = Expediente::find($exClinico->cita->idexpediente);
        $exClinico->resExamenClinico = ResultadoExamenClinico::find($exClinico->idresultadoexamenclinico);
        
        return view('examenClinico.edit')->with(['exClinico' => $exClinico]);
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
        return redirect()->route('examenesClinicos.index');
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
