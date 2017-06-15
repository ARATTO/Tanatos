
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Bitacora Ingreso
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
					<div class="panel-heading"> Bitacoras </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						


					<br>

					<table class="table table-striped">
						    <thead>
						      <tr>
						      	<th>Numero Bitacora</th>
						      	<th>Descripcion</th>
						        <th>Fecha</th>
								<th>Hora</th>
								<th>Editar</th>			
						      </tr>
						    </thead>
						    <tbody>
						    @if($bitacora!= null)
							@foreach($bitacora as $exp)
								 @if (Auth::guest())
        						 @else
        						 	
							     		<tr>
							     			<td>{{$exp->id}}</td>
							     			<td>{{$exp->descripcionbitacora}}</td>
							     
							  				<td>{{$exp->fechabitacora}}</td>
							  				<td>{{$exp->horabitacora}}</td>
											<td>
							          			<a href="{{route('bitacoraIngreso.edit',$exp->id)}}" class="btn btn-warning"><font color="black" size="2"> <b>Editar</b></font></a>
											</td>

										</tr>
							      @endif
						     @endforeach
						     @endif
						    </tbody>
						  </table>
        			
						
					</div>
				</div>
			</div>
		</div>

			@if($bitacora != null)
			{!! $bitacora->appends(Request::all())->render() !!}
			@endif
	</div>
	</section><!-- /.content -->
@endsection
