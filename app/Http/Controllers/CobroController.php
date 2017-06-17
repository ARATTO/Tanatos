<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Expediente;
use App\CatalogoPrecio;
use App\ConsultaMedica;
use App\TratamientoMedicamento;
use App\Medicamento;
use App\CostoServicio;
use App\TipoExamenClinico;
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
        //dd($request->all());

        $i=0;
        $k=0;
        foreach ($request->all() as $valores) {
            if($i==0){

            }elseif ($i==2) {
                $idCostoServicio = $valores;
            }elseif ($i>2) {
                $idCatalogo[$k] = $valores;
                $k = $k+1;
            }

            $i = $i+1;
        }

        $total = 0;

        $costoServicio = CostoServicio::find($idCostoServicio);

        foreach ($idCatalogo as $valor ) {   
            $idCatalogo =CatalogoPrecio::find($valor);
            $costoServicio->servicioPrecio()->attach($idCatalogo);

            $total = $total + $idCatalogo->precioespecial;
        }

        $costoServicio->preciocostoservicio = $total;
        $costoServicio->save();



        Flash::success("Se ha guardado la factura " .$idCostoServicio. " con exito" );


        return redirect()->route('cobro.show',$request->expediente);
        //return redirect()->route('cobro.index');

    }




    public function store2(Request $request)
    {
        //dd($request->all());

        $i=0;
        $k=0;
        foreach ($request->all() as $valores) {
            if($i==0){

            }elseif ($i==2) {
                $idCostoServicio = $valores;
            }elseif ($i>2) {
                $idCatalogo[$k] = $valores;
                $k = $k+1;
            }

            $i = $i+1;
        }

        $total = 0;

        $costoServicio = CostoServicio::find($idCostoServicio);


        $costoServicio->preciocostoservicio = $total;


        $consultaMedica = ConsultaMedica::where('idcostoservicio',$costoServicio->id)->paginate(1);

                $consultaMedica->each(function($consultaMedica){
                $consultaMedica->citas;
                $consultaMedica->expedientes;
                $consultaMedica->citas->doctores;
                $consultaMedica->citas->doctores->especialidad;
                $consultaMedica->costosServicios;
                $consultaMedica->examenClinico;
                if(count($consultaMedica->examenClinico)>0){
                    foreach ($consultaMedica->examenClinico as $examenClinico) {
                        $examenClinico->tipoExamenesClinicos = TipoExamenClinico::where('id',$examenClinico->idtipoexamenclinico)->get()[0];
                    }
                    
                }

                $consultaMedica->examenFisico;
                if(count($consultaMedica->examenFisico)>0){
                    foreach ($consultaMedica->examenFisico as $examenFisico) {
                        $examenFisico->tipoExamenesFisicos; 
                    }
                    
                }
                
                $consultaMedica->diagnostico;
                if(count($consultaMedica->diagnostico)>0){

                foreach ($consultaMedica->diagnostico as $diagnostico) {
                    $diagnostico->tratamientos;
                }
                }
                
            });

            $precio;
            $k=0;

            //dd($consultaMedica);
           if(count($consultaMedica[0]->diagnostico)>0){
           $tratamientos= TratamientoMedicamento::where('idtratamiento',$consultaMedica[0]->diagnostico[0]->tratamientos->id)->paginate(20);

           //dd($tratamientos);
           $medicamento;
           $i=0;
            foreach ($tratamientos as $key => $value) {
                $medicamento[$i] = Medicamento::where('id',$value->idmedicamento)->get();
                $i=$i+1;
            }

               foreach ($medicamento as $medicina => $vector) {
            foreach ($vector as $key => $value) {

            $precio[$k] = CatalogoPrecio::where('nombreprecioespecial',$value->nombremedicamento)->get();
               $k=$k+1;
            }
            
           }
           }



           if (count($consultaMedica[0]->examenFisico )>0) {

                foreach ($consultaMedica[0]->examenFisico as $examenFisico) {
                    $precio[$k] = CatalogoPrecio::where('nombreprecioespecial',$examenFisico->tipoExamenesFisicos->nombreexamenfisico)->get();
           
                   $k=$k+1;            
                           }
           }

            if (count($consultaMedica[0]->examenClinico )>0) {

                foreach ($consultaMedica[0]->examenClinico as $examenClinico) {
                    //dd($examenClinico->tipoExamenesClinicos->nombreexamenclinico);    
                    $precio[$k] = CatalogoPrecio::where('nombreprecioespecial',$examenClinico->tipoExamenesClinicos->nombreexamenclinico)->get();
           
                   $k=$k+1;            
                           }
           }
           

           $precio[$k] = CatalogoPrecio::where('nombreprecioespecial',$consultaMedica[0]->citas->doctores->especialidad->nombreespecialidad)->get();

           $totalSinIVA = 0;
           foreach ($precio as $unitario) {
                $totalSinIVA = $totalSinIVA + $unitario[0]->precioespecial;
           }
           //dd($precio);

            $IVA = $totalSinIVA *0.13;
            $total = $totalSinIVA + $IVA;

             $view =  \View::make('cobro.factura',compact('precio','consultaMedica','totalSinIVA','IVA','total'))->render();

             //dd($view);
             $pdf = \App::make('dompdf.wrapper');
             $pdf->loadHTML($view);
             //dd($pdf);
             //return $pdf->download('reporte.pdf');

             return $pdf->download('reporte.pdf');

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
                    foreach ($value->consultaMedica as $costoTotal => $costo) {
                       
                           $costo->costosServicios; 

                           }       
                    
                }
                
            });

            //dd($expediente);
            
              $precio = CatalogoPrecio::all();

              return view('cobro.create',compact('expediente'));
    }

        public function servicios($id)
    {

            
            $consultaMedica = consultaMedica::where('id',$id)->paginate(1);

            $consultaMedica->each(function($consultaMedica){
                $consultaMedica->citas;
                $consultaMedica->expedientes;
                $consultaMedica->citas->doctores;
                $consultaMedica->citas->doctores->especialidad;
                $consultaMedica->costosServicios;
                $consultaMedica->examenClinico;
                if(count($consultaMedica->examenClinico)>0){
                    foreach ($consultaMedica->examenClinico as $examenClinico) {
                        $examenClinico->tipoExamenesClinicos = TipoExamenClinico::where('id',$examenClinico->idtipoexamenclinico)->get()[0];
                    }
                    
                }

                $consultaMedica->examenFisico;
                if(count($consultaMedica->examenFisico)>0){
                    foreach ($consultaMedica->examenFisico as $examenFisico) {
                        $examenFisico->tipoExamenesFisicos; 
                    }
                    
                }
                
                $consultaMedica->diagnostico;
                if(count($consultaMedica->diagnostico)>0){

                foreach ($consultaMedica->diagnostico as $diagnostico) {
                    $diagnostico->tratamientos;
                }
                }
                
            });

            $precio;
            $k=0;

            //dd($consultaMedica);
           if(count($consultaMedica[0]->diagnostico)>0){
           $tratamientos= TratamientoMedicamento::where('idtratamiento',$consultaMedica[0]->diagnostico[0]->tratamientos->id)->paginate(20);

           //dd($tratamientos);
           $medicamento;
           $i=0;
            foreach ($tratamientos as $key => $value) {
                $medicamento[$i] = Medicamento::where('id',$value->idmedicamento)->get();
                $i=$i+1;
            }

               foreach ($medicamento as $medicina => $vector) {
            foreach ($vector as $key => $value) {

            $precio[$k] = CatalogoPrecio::where('nombreprecioespecial',$value->nombremedicamento)->get();
               $k=$k+1;
            }
            
           }
           }



           if (count($consultaMedica[0]->examenFisico )>0) {

                foreach ($consultaMedica[0]->examenFisico as $examenFisico) {
                    $precio[$k] = CatalogoPrecio::where('nombreprecioespecial',$examenFisico->tipoExamenesFisicos->nombreexamenfisico)->get();
           
                   $k=$k+1;            
                           }
           }

            if (count($consultaMedica[0]->examenClinico )>0) {

                foreach ($consultaMedica[0]->examenClinico as $examenClinico) {
                    //dd($examenClinico->tipoExamenesClinicos->nombreexamenclinico);    
                    $precio[$k] = CatalogoPrecio::where('nombreprecioespecial',$examenClinico->tipoExamenesClinicos->nombreexamenclinico)->get();
           
                   $k=$k+1;            
                           }
           }
           

           $precio[$k] = CatalogoPrecio::where('nombreprecioespecial',$consultaMedica[0]->citas->doctores->especialidad->nombreespecialidad)->get();

           $totalSinIVA = 0;
           foreach ($precio as $unitario) {
                $totalSinIVA = $totalSinIVA + $unitario[0]->precioespecial;
           }
           //dd($precio);

            $IVA = $totalSinIVA *0.13;
            $total = $totalSinIVA + $IVA;

            return view('cobro.servicios',compact('precio','consultaMedica','totalSinIVA','IVA','total'));
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
