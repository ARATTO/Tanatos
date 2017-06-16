
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Actualizar Bitacora
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
					<div class="panel-heading"> Actualizar Bitacora </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')	
            {!! Form::open(['route' => ['bitacoraIngreso.update',$bitacora->id],'method'=>'PUT']) !!}                          


						 <div class="col-md-8 col-md-offset-1">
                                            <h3>
                                                <span class="label label-primary">{{ trans('Datos de la bitacora') }}</span>
                                            </h3>
                                            <hr>
                                             <span class="input-group-addon" id="primernombre">Descripcon Bitacora</span>
                                                <div class="form group">
                                                 
                                                        {!! Form::textArea('descripcionbitacora', $bitacora->descripcionbitacora, ['class' => 'form-control ', 'placeholder'=> 'Descripcion de ingreso', 'required', 'maxlength'=>'255']) !!}
                                                    
                                                </div>

                                                <hr>
                              <span class="input-group-addon" id="primerapellido">Fecha y Hora bitacora</span>

                           <div class="input-group has-info ">
                    
                      
                               <span class="input-group-addon" id="primerapellido">Fecha</span>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name='fechaingreso' id='fechaIngreso' required value='{{ date("$bitacora->fechabitacora" . " " ."$bitacora->horabitacora") }}' />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                     
                                                    
     
                        </div>					

                <div class="form-group form-inline">
                    <h3><span class="label label-danger">{{ trans('Actualizar Datos') }}</span><h3>
                    <button type="submit" class="btn btn-success btn-lg"> {{trans('Actualizar')}} </button>
                </div>  
						
					</div>
{{Form::close()}}
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
