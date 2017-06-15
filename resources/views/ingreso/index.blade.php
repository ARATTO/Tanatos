
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Ingresos
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
					<div class="panel-heading"> Buscar Ingresos </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						



						{!! Form::open(['route' =>'ingreso.index', 'method'=>'GET','class'=>'form-center', 'role'=>'search' ]) !!}
							<div class="input-group">
					 			<span class="input-group-addon">@</span>
					 			{!!Form::number('ingreso',null,['class'=>'form-control','placeholder'=>'Busqueda'])!!}
					
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
								<th>Ver Bitacoras </th>
								<th>Ingresar Bitacora</th>
						

						      </tr>
						    </thead>
						    <tbody>
							@if($ingreso != null)
							@foreach($ingreso as $ing)
								 @if (Auth::guest())
        						 @else
        						 	
							     		<tr>
							     			<td>{{$ing->expedientes->id}}</td>
							     			<td>{{$ing->id}} </td>						     	
							  				<td>{{$ing->expedientes->personas->primernombre}} {{$ing->expedientes->personas->segundonombre}}</td>
							  				<td>{{$ing->expedientes->personas->primerapellido}} {{$ing->expedientes->personas->segundoapellido}}</td>
											<td>
											{!! Form::open(['route' =>'bitacoraIngreso.index', 'method'=>'GET','class'=>'form-center', 'role'=>'search' ]) !!}
												<input type="number" name="idingreso" value="{{$ing->id}}" style="display: none">
												<button type="submit" class="btn btn-primary"> <font color="black" size="2"> <b>Ver Bitacoras</b></font></button>
							          			
							          		{!!Form::close()!!}
											</td>							  				
											<td>
							          			<a href="{{route('bitacoraIngreso.show',$ing->id)}}" class="btn btn-success"><font color="black" size="2"> <b>Ingresar Bitacora</b></font></a>
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
			@if($ingreso != null)
			{!! $ingreso->appends(Request::all())->render() !!}
			@endif			
	</div>
	</section><!-- /.content -->
@endsection
