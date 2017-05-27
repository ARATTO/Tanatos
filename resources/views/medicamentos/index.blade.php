@extends('layouts.app')

@section('htmlheader_title')
	Ver medicamentos
@endsection


@section('main-content')
	

    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">

				
			<div class="col-md-10 col-md-offset-1">
	
					<div align="right">
							<a href="{{route('medicamentos.create')}}" class="btn btn-primary" > <font color="black" size="2" style=""> <b>Agregar nuevo Medicamento</b> </font>  </a>
						
					</div>

					<br>
				<div class="panel panel-default">
					@include('bones-flash::bones.flash')
					<div class="panel-heading"> Listado de medicamentos 		
			
					</div>
					<br>
					{!! Form::open(['route' =>'medicamentos.index', 'method'=>'GET','class'=>'form-center', 'role'=>'search' ]) !!}
					<div class="input-group">
					  <span class="input-group-addon">@</span>
					  {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Busqueda'])!!}
					
					</div>
					{!! Form::close() !!}

					<div class="panel-body">
						<!-- 16:9 aspect ratio -->
						  <table class="table table-striped">
						    <thead>
						      <tr>
						      	<th>Codigo</th>
						        <th>Nombre</th>
			
						        <th>Via Administracion</th>
						        <th>Farmaceutica</th>
						        <th>Observacion</th>
						        <th>Precio</th>
						        @if (Auth::guest())
					            @else
					            @if(Auth::user()->idrol == 1)
						        <th>Opciones</th>
						        @endif
						        @endif
						      </tr>
						    </thead>
						    <tbody>
						   	@foreach($medicamentos as $medicamento)
						      <tr>
						  		<td>{{$medicamento['codigomedicamento']}}</td>
						  		<td>{{$medicamento['nombremedicamento']}}</td>

						  		<td>{{$medicamento['viaadministracion']}}</td>
						  		<td>{{$medicamento['formafarmaceutica']}}</td>
						  		<td>{{$medicamento['observacion']}}</td>
						  		<td>{{$medicamento['preciomedicamento']}}</td>
						  		@if (Auth::guest())
					            @else
					            @if(Auth::user()->idrol == 1)
						  		<td>
						  								
									<a href="{{route('medicamentos.edit',$medicamento['id'])}}" class="btn btn-warning"> <font color="black" size="2"> <b>Editar</b> </font>  </a>  
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
		{!! $medicamentos->appends(Request::all())->render() !!}
	</div>
	</section><!-- /.content -->
@endsection

