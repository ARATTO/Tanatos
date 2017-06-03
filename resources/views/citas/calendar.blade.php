@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('tntmessage.Inicio') }}
@endsection


@section('main-content')
	@include('layouts.partials.contentheader.generic_head',array('contentheader_title' => trans('eetntmessage.CalendarioCitas')))
	<style type="text/css">
			.fc-view
			{
				width: 100%;
				overflow: visible;
			}
	</style>
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading"  >{{ trans('eetntmessage.Citas') }}
				
					<!-- Trigger the modal with a button -->
					<button style=" float:right;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">{{ trans('eetntmessage.NuevaCita') }}</button></div>
					
					<div class="panel-body">
						<!-- 16:9 aspect ratio -->
						@include('bones-flash::bones.flash')
						<div id='calendar'></div>
						<meta name="csrf-token" content="<?php echo csrf_token() ?>"> 
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->


	<section><!-- Modal -->		
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">{{trans('eetntmessage.NuevaCita')}}</h4>
					</div>
					<!-- CONTENIDO DE LA CITA -->
					<div class="modal-body">
						
					<div class="panel-body">
							<input id="token" value= {{csrf_field() }} 
							{!! Form::open(['action'=>'CitaController@store','class'=>'form-center' ]) !!}
							
							<div class="form-group col-md-12" align="left">
								{!!Form::label('title', trans('eetntmessage.IngreseTituloCita'))!!}
								{!!Form::text('title',null,['class'=>'form-control','placeholder'=>trans('eetntmessage.ControlPrenatal'),'required' ])!!}
							</div>

							<div class="form-group col-md-12" align="left">
								{!!Form::label('idexpediente', trans('eetntmessage.IngreseNumeroExpedi'))!!}
								{!!Form::number('idexpediente',null,['class'=>'form-control','placeholder'=>'052105141620','min'=>0,'required' ])!!}
							</div>
				

							
							<div class="form-group col-md-12" align="left">     
								{!!Form::label('start', trans('eetntmessage.IngreseFechaDeInicio'))!!}
								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" name='start' id='start' required />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>

														
					</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">{{trans('tntmessage.Cancelar')}}</button>
						{!! form::submit(trans('tntmessage.Guardar'), ['class'=> 'btn btn-success']) !!}
						{!! Form::close() !!}	
					</div>
				</div>

			</div>
		</div>
	</section> <!-- /.Modal -->


@endsection

