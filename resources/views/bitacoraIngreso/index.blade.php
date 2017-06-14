
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
					<div class="panel-heading"> Buscar expediente </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						



						{!! Form::open(['route' =>'bitacoraIngreso.index', 'method'=>'GET','class'=>'form-center', 'role'=>'search' ]) !!}
							<div class="input-group">
					 			<span class="input-group-addon">@</span>
					 			{!!Form::number('expediente',null,['class'=>'form-control','placeholder'=>'Busqueda'])!!}
					
							</div>
					{!! Form::close() !!}

					<br>
        			<table class="table table-striped">
						    <thead>
						      <tr>
						      	<th>Expediente</th>
						      	<th>Numero de ingreso</th>
						        <th>Nombre</th>
								<th>Apellidos</th>			
								<th>Ingresar Bitacora</th>
						

						      </tr>
						    </thead>
						    <tbody>
						    @if($expediente != null)
							@foreach($expediente as $exp)
								 @if (Auth::guest())
        						 @else
        						 	
							     		<tr>
							     			<td>{{$exp->id}}</td>
							     			@if(count($exp->ingreso)>0)
							     				<td>{{$exp->ingreso->id}} </td>
							     			@else
							     				<td>No esta ingresado</td>
							     			@endif
							  				<td>{{$exp->personas->primernombre}} {{$exp->personas->segundonombre}}</td>
							  				<td>{{$exp->personas->primerapellido}} {{$exp->personas->segundoapellido}} </td>
											<td>
							          			<a href="" class="btn btn-success"><font color="black" size="2"> <b>Ingresar Bitacora</b></font></a>
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
			@if($expediente != null)
			{!! $expediente->appends(Request::all())->render() !!}
			@endif
	</div>
	</section><!-- /.content -->
@endsection
