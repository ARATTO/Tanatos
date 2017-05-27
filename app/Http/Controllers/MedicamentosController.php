<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Medicamento;
use App\TipoMedicamento;
use GeneaLabs\Bones\Flash\Flash;
use View;


use DB;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //dd($request->all());

        $medicamentos = Medicamento::name($request->name)->orderBy('codigomedicamento','ASC')->paginate(20); 

       // $medicamentos = DB::table('medicamento')->paginate(20);


        $medicamentos->each(function($medicamentos){   
            $medicamentos->tipoMedicamentos;
        });

        //dd(Auth::user());
       
        
        return view('medicamentos.index',compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoMedicamentos = TipoMedicamento::orderBy('id')->lists('nombretipomedicamento','id');
        return View::make('medicamentos.create')->with('tipoMedicamentos',$tipoMedicamentos);
        
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

        Medicamento::create($request->all());

        $medicamentos = Medicamento::orderBy('codigomedicamento','ASC')->paginate(20);  


        $medicamentos->each(function($medicamentos){   
            $medicamentos->tipoMedicamentos;
        });

        Flash::success("Se ha guardado el medicamento: ".$request->nombremedicamento." con exito");

        return redirect()->route('medicamentos.index')->with('medicamentos',$medicamentos);
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
        $medicamento = Medicamento::find($id);   

        //dd($medicamento);
        

         $tipoMedicamentos = TipoMedicamento::orderBy('id')->lists('nombretipomedicamento','id');
        return View::make('medicamentos.update')
        ->with('tipoMedicamentos',$tipoMedicamentos)
        ->with('medicamento',$medicamento);      
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $medicamento = Medicamento::find($id);

        $medicamento->codigomedicamento = $request->codigomedicamento;
        $medicamento->nombremedicamento = $request->nombremedicamento;
        $medicamento->idtipomedicamento = $request->idtipomedicamento;
        $medicamento->viaadministracion = $request->viaadministracion;
        $medicamento->formafarmaceutica = $request->formafarmaceutica;
        $medicamento->observacion = $request->observacion;
        $medicamento->concentracion = $request->concentracion;
        $medicamento->preciomedicamento = $request->preciomedicamento;

        $medicamento->save();

       $medicamentos = Medicamento::orderBy('codigomedicamento','ASC')->paginate(20);  


        $medicamentos->each(function($medicamentos){   
            $medicamentos->tipoMedicamentos;
        });

        Flash::success("Se ha actualizado el medicamento: ".$request->nombremedicamento." con exito");

        return redirect()->route('medicamentos.index')->with('medicamentos',$medicamentos);
        
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
