
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Busqueda
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->

    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
					<div class="panel-heading"> Busqueda </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						
				        {!! Form::open(['route' =>'busqueda', 'method'=>'GET','class'=>'form-center', 'role'=>'search' ]) !!}
				            <div class="input-group" >
				                <input type="text" name="q" class="form-control" placeholder="Digite su busqueda"/ style="border-radius: 5px;" autofocus>
				              <span class="input-group-btn" >
				                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search" style="border-radius: 8px;"></i></button>
				              </span>
				            </div>
			    	    {!! Form::close() !!}

			    	    <div class="input-group">
			    	    	<p style="font-weight: bold;">
			    	    		<br>
			    	    		Criterios de busqueda:
			    	    	</p>
			    	    	
			    	    </div>

        					<div style="padding: 5px; float: left; width: 45%; text-align: justify;">

        						{{Form::checkbox('criterio', '0', true)}} Nombres<br>
				    	    	{{Form::checkbox('criterio', '0')}} Apellidos<br>
				    	    	{{Form::checkbox('criterio', '0')}} Fecha Nacimiento<br>
			    	    		
        					</div>

        					<div style=" float: right; width: 45%; text-align: justify;">
        					@if (Auth::guest())
        					@else
	        					 @if(Auth::user()->idrol == 1 || Auth::user()->idrol == 3 || Auth::user()->idrol == 4 || Auth::user()->idrol == 6)
	       							{{Form::checkbox('criterio', '0')}} Numero de Expediente<br>
					    	    	{{Form::checkbox('criterio', '0')}} Diagnostico<br>
					    	    	{{Form::checkbox('criterio', '0')}} Fecha de expedicion<br>
					    	    @endif	
					    	@endif
        					</div>
					@if($Personas == null)        					
					
					@else
        			<div class="input-group">
        			<br>
        			<br>
        							<table class="table table-striped">
						    <thead>
						      <tr>
						        <th>Nombre</th>
								<th>Apellidos</th>			

						      </tr>
						    </thead>
						    <tbody>
							@foreach($Personas as $persona)
						      <tr>
						  		<td>{{$persona->primernombre}} {{$persona->segundonombre}}</td>
						  		<td>{{$persona->primerApellido}} {{$persona->segundoApellido}} </td>
						  	
						      </tr>
						     @endforeach
						    </tbody>
						  </table>	
        			</div>
        			@endif()
        		
					</div>
				</div>
			</div>
		</div>	
				@if($Personas == null)
				@else
				{!! $Personas->appends(Request::all())->render() !!}
				@endif
	</div>
	</section><!-- /.content -->

@endsection
