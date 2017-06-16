
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Cobro
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
	@include('layouts.partials.contentheader.cobro.index_head')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
					<div class="panel-heading"> Cobros </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')


						{!! Form::open(['route' =>'cobro.index', 'method'=>'GET','class'=>'form-center', 'role'=>'search' ]) !!}
							<div class="input-group">
					 			<span class="input-group-addon">@</span>
					 			{!!Form::number('expediente',null,['class'=>'form-control','placeholder'=>'Busqueda de expedientes'])!!}
							<br>
							</div>
					{!! Form::close() !!}


<br>

        			<table class="table table-striped">
						    <thead>
						      <tr>
								<th>expediente</th>
						        <th>Nombre</th>
								<th>Apellidos</th>			
								<th>Realizar Cobro</th>
						      </tr>
						    </thead>
						    <tbody>
						    @if($expediente != null)
						    	@foreach($expediente as $exp)
						    		<td>{{$exp->id}}</td>
						    		<td>{{$exp->personas->primernombre}} {{$exp->personas->segundonombre}}</td>
						    		<td>{{$exp->personas->primerapellido}} {{$exp->personas->segundoapellido}}</td>
						    		<td>
					        			<a href="{{route('cobro.show',$exp->id)}}" class="btn btn-success"><font color="black" size="2"> <b>Crear Factura</b></font></a>
						    		</td>
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
