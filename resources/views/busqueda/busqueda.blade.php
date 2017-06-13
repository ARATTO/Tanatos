
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Busqueda
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
					<div class="panel-heading"> Busqueda </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						
				        {!! Form::model( Request::all(), ['route' =>'busqueda', 'method'=>'GET','class'=>'form-center', 'role'=>'search' ]) !!}


				            <div class="input-group" >

				            <div class="popup" >
							  <span class="popuptext" id="myPopup">
ejemplos de buqueda                              
Nombre: Rodrigo Romero     
Fecha: 1995-12-30
Expediente: 0001 </span>


		
							</div> 
								{!!Form::text('q',null, ['class'=>'form-control', 'placeholde'=>'Digite su busqueda', 'style'=>'border-radius: 5px;', 'autofocus', 'title' => 'ejemplos de buqueda
								
Nombre: Rodrigo
Fecha: 1995-15-30
Expediente: 0001' ])  !!}

	
				              <span class="input-group-btn" >
				                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search" style="border-radius: 8px;"></i></button>

				              <button  type="button" onmouseover="myFunction()" name='ayuda' id='ayuda-btn' class="btn btn-flat"><i class="fa fa-info-circle" style="border-radius: 8px;"></i></button>
				                
				              </span>
				            </div>
		

			    	    <div class="input-group">
			    	    	<p style="font-weight: bold;">
			    	    		<br>
			    	    		Criterios de busqueda:
			    	    	</p>
			    	    	
			    	    </div>

			    	    <section>
							<div style="padding: 5px; float: left; width: 45%; text-align: justify;">

        						<div style = "display: none">
        							{{Form::checkbox('criterio[]', '1', true)}} Primer Nombre<br>
        						</div>

        						{{Form::checkbox('criterio[]', '1', true, ['disabled'])}} Primer Nombre<br>
        						{{Form::checkbox('criterio[]', '2'	)}} Segundo Nombre<br>
				    	    	{{Form::checkbox('criterio[]', '3')}} Primer Apellido<br>
				    	    	{{Form::checkbox('criterio[]', '4')}} Segundo Apellido<br>
				    	    	{{Form::checkbox('criterio[]', '5')}} Fecha Nacimiento<br>
			    	    		
        					</div>

        					<div style=" float: right; width: 45%; text-align: justify;">
        					@if (Auth::guest())
        					@else
	        					 @if(Auth::user()->idrol == 1 || Auth::user()->idrol == 3 || Auth::user()->idrol == 4 || Auth::user()->idrol == 6)
	       							{{Form::checkbox('criterio[]', '6')}} Numero de Expediente<br>
					    	    <!--	{{Form::checkbox('criterio[]', '5')}} Diagnostico<br>
					    	    	{{Form::checkbox('criterio[]', '6')}} Fecha de expedicion<br>-->
					    	    @endif	
					    	@endif
        					</div>
			    	    </section>


        				{!! Form::close() !!}
					@if($Personas == null)        					
					
					@else
					<section>

					<div class=" form-center" >


        			<table class="table table-striped">
						    <thead>
						      <tr>
						        <th>Nombre</th>
								<th>Apellidos</th>			
								<th>Fecha de Nacimiento</th>
								<th>expediente</th>
								<th>ver Expediente</th>
						


						      </tr>
						    </thead>
						    <tbody>
							@foreach($Personas as $persona)
						      <tr>
						  		<td>{{$persona->primernombre}} {{$persona->segundonombre}}</td>
						  		<td>{{$persona->primerapellido}} {{$persona->segundoapellido}} </td>
						  		<td>{{$persona->fechanacimiento}} </td>
						  		@if(count($persona->expediente)>0)
								<td>{{$persona->expediente[0]->id}}</td>
								@else
								<td>No posee expediente</td>
								@endif
						  		<td></td>
						  	
						      </tr>
						     @endforeach
						    </tbody>
						  </table>	
        			</div>
					</section>

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


<script type="text/javascript">
    function c(a)
    {
        a.checked='checked';
    }

$(document).ready(function(){  
  
    $("#nombre").click(function() {  
        $("#nombre").attr('checked', true);  
    });  

  
}); 


// When the user clicks on <div>, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}



</script>
