
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Cobro
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
					<div class="panel-heading"> Seleccion de servicios </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						
						
						<br>

                    <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>cita</th>
                                <th>consulta</th>
                                <th>Crear Factura</th>          
                 
                              </tr>
                            </thead>
                            <tbody>
                            @if($expediente != null)
                                @foreach($expediente[0]->cita as $exp)
                                <tr>
                                    <td>{{$exp->id}}</td>
                                    @if(count($exp->consultaMedica)>0)
                                        <td>{{$exp->consultaMedica[0]->id}}</td>
                                         <td>
                                        <a href="{{route('servicios',$exp->consultaMedica[0]->id)}}" class="btn btn-success"><font color="black" size="2"> <b>Crear Factura</b></font></a>
                                    </td>
                                    @else
                                        <td>No ha realizado consulta</td>
                                        <td>No hay Factura</td>
                                    @endif
                                     
                                </tr>
                                @endforeach
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
