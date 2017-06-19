
@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Respuesta Examen Clinico
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
	@include('layouts.partials.contentheader.examenClinico.show_head')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-warning">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
					<div class="panel-heading"> Respuesta Examen Clinico No. {{ $exClinico->id }}</div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						
                        

                        {!! Form::open(['route' => ['examenesClinicos.update', $exClinico], 'method' => 'PUT', 'files' => true]) !!}

                            <h3>
                               <span class="label label-primary">{{ trans('tntmessage.General') }}</span>
                            </h3>
                            <hr>
                            <div class="input-group has-success form-inline">
                                <span class="input-group-addon" id="expediente">No. Expediente</span>
                                {!! form::text('expediente', $exClinico->expediente->id , ['class' => 'form-control', 'disabled']) !!}

                                <span class="input-group-addon" id="fechaconsulta">Fecha Consulta</span>
                                {!! form::text('fechaconsulta', $exClinico->consultaMedica->fechaconsulta , ['class' => 'form-control', 'disabled']) !!}

                                <span class="input-group-addon" id="title">Consulta</span>
                                {!! form::text('title', $exClinico->cita->title , ['class' => 'form-control', 'disabled']) !!}

                                <span class="input-group-addon" id="tipoexamen">Tipo de Examen</span>
                                {!! form::text('tipoexamen', $exClinico->tipoExamenClinico->nombreexamenclinico , ['class' => 'form-control', 'disabled']) !!}
                                
                            </div>
                            <hr>
                            <div class="input-group has-success form-inline">
                                <span class="input-group-addon" id="antesedentes">Sintomatologia</span>
                                {!! form::textArea('sintomatologia', $exClinico->consultaMedica->sintomatologia , ['class' => 'form-control ', 'disabled']) !!}
                            </div>
                            <hr>  
                             
                            <h2>
                               <span class="label label-danger">{{ trans('tntmessage.RespuestaExamen') }}</span>
                            </h2>
                            <hr> 
                            
                            <div class="input-group has-success form-inline">
                                <span class="input-group-addon" id="resultadoclinico">Descripcion de Resultado</span>
                                {!! form::textArea('resultadoclinico', $exClinico->resExamenClinico->resultadoclinico , ['class' => 'form-control ', 'disabled','maxlength'=>"250"]) !!}
                            </div>
                            <hr> 
                            <input type="hidden" name="idexamenclinico" value="{{ $exClinico->id }}">
                            <button type="submit" class="btn btn-success btn-lg"> {{trans('tntmessage.Regresar')}} </button>

                        {!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
