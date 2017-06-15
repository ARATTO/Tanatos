
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Ingresar Bitacora
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
					<div class="panel-heading"> Ingresar Bitacora </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')	
{!! Form::open(['action' =>'BitacoraIngresoController@store','class'=>'form-center' ]) !!}
<div style="display: none">
	<input type="number" name="idingreso" value="{{$id}}">
</div>

						 <div class="col-md-8 col-md-offset-1">
                                            <h3>
                                                <span class="label label-primary">{{ trans('Datos de la bitacora') }}</span>
                                            </h3>
                                            <hr>
                                             <span class="input-group-addon" id="primernombre">Descripcon Bitacora</span>
                                                <div class="form group">
                                                 
                                                        {!! Form::textArea('descripcionbitacora', null, ['class' => 'form-control ', 'placeholder'=> 'Descripcion de ingreso', 'required', 'maxlength'=>'255']) !!}
                                                    
                                                </div>

                                                <hr>
                              <span class="input-group-addon" id="primerapellido">Fecha y Hora bitacora</span>

                           <div class="input-group has-info ">
                    
                      
                               <span class="input-group-addon" id="primerapellido">Fecha</span>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name='fechaingreso' id='fechaIngreso' required />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                     
                                                    
     
                        </div>					

                <div class="form-group form-inline">
                    <h3><span class="label label-danger">{{ trans('Guardar Datos') }}</span><h3>
                    <button type="submit" class="btn btn-success btn-lg"> {{trans('Guardar')}} </button>
                </div>  
						
					</div>
{{Form::close()}}
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
