
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Servicios
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
	@include('layouts.partials.contentheader._default')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
					<div class="panel-heading"> Facturacion </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')	


                                        <div class="input-group has-info form-inline">
                                            <h3>
                                                <span style="">N° Factura:  </span>
                                                <span>{{$consultaMedica[0]->costosServicios->id}}</span>
                                            </h3>	
                                    
										</div>
										<div class="input-group has-info form-inline">
                                            <h4>
                                                <span style="">Fecha Facturacion: </span>
                                                <span>{{ date("m/d/Y")}}</span>
                                            </h4>	
                                            
										</div>
										<div class="input-group has-info form-inline">
                                            <h4>
                                                <span style="">Numero de expediente: </span>
                                                <span>{{ $consultaMedica[0]->citas->expedientes->id}}</span>
                                            </h4>	
                                            <br>
										</div>										

										
					

					 <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Servicio</th>
                                <th>Descripcion</th>
                                <th>Precio Unitario</th>
                                <th>Total</th>                    
                 
                              </tr>
                            </thead>
                            <tbody>
                            @if($precio!= null)
                                @foreach($precio as $unitario)
                                <tr>
        							<td>{{$unitario[0]->nombreprecioespecial}}</td>
        							<td>{{$unitario[0]->descripcionprecioespecial}}</td>
        							<td>{{$unitario[0]->precioespecial}}</td>
        							<td>{{$unitario[0]->precioespecial}}</td>
                                     
                                </tr>
                                @endforeach
                                 <tr>
                                	<td><b>Total Sin IVA</b></td>
        							<td>_</td>
        							<td>_</td>
        							<td><b>{{$totalSinIVA}}</b></td>        
                                </tr>
                                <tr>
                                	<td><i>IVA</i></td>
        							<td>_</td>
        							<td>_</td>
        							<td><i>{{round($IVA,2)}}</i></td>        
                                </tr>
                                <tr>
                                	<td><b>Total</b></td>
        							<td>_</td>
        							<td>_</td>
        							<td><b>{{round($total,2)}}</b></td>        
                                </tr>
                            @endif
                            </tbody>
                          </table>         
						
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
