@extends('layouts.app')

@section('htmlheader_title')
	Ver doctores
@endsection


@section('main-content')
	

    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">

				
			<div class="col-md-10 col-md-offset-1">
	
					<div align="right">
							<a href="{{route('doctores.create')}}" class="btn btn-primary" > <font color="black" size="2" style=""> <b>Agregar nuevo Doctor</b> </font>  </a>
						
					</div>

					<br>
				<div class="panel panel-default">
					@include('bones-flash::bones.flash')
					<div class="panel-heading"> Listado de doctores 		
			
					</div>
										<br>
					{!! Form::open(['route' =>'doctores.index', 'method'=>'GET','class'=>'form-center', 'role'=>'search' ]) !!}
					<div class="input-group">
					  <span class="input-group-addon">@</span>
					  {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Busqueda por nombre'])!!}
					
					</div>
					{!! Form::close() !!}


					<div class="panel-body">
						<!-- 16:9 aspect ratio -->
						  <table class="table table-striped">
						    <thead>
						      <tr>
						      	<th>Id</th>
						        <th>Nombre</th>
			
						        <th>Especialidad</th>
						        <th>Emergencia</th>
						        
						        @if (Auth::guest())
					            @else
					            @if(Auth::user()->idrol == 1)
						        <th>Opciones</th>
						        @endif
						        @endif
						      </tr>
						    </thead>
						    <tbody>
						   	@foreach($doctores as $doctor)
						      <tr>
						  		<td>{{$id = $doctor->id}}</td>
						  		<td>{{$nombredoctor = $doctor->nombredoctor}}</td>

						  		<td>{{$especialidad = $doctor->especialidad}}</td>
						  		@if($doctor->esemergencia == 1)
						  		<td>Si</td>
						  		@else
						  		<td>No</td>
						  		@endif
						  		@if (Auth::guest())
					            @else
					            @if(Auth::user()->idrol == 1)
						  		<td>
						  								
									<a href="{{route('doctores.edit', $doctor['id'])}}" class="btn btn-warning"> <font color="black" size="2"> <b>Editar</b> </font>  </a>  
								@endif
						        @endif
								</td>
						  	
						      </tr>
						     @endforeach
						    </tbody>
						  </table>
						
					</div>
				</div>
			</div>
		</div>
		{!! $doctores->appends(Request::all())->render() !!}
	</div>
	</section><!-- /.content -->
@endsection