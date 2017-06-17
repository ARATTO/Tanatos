
@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Respuesta Examen Fisico
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
	@include('layouts.partials.contentheader.examenFisico.show_head')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-warning">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
					<div class="panel-heading"> Respuesta Examen Fisico No. {{ $exFisico->expediente->id }}</div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						
                        

                        {!! Form::open(['route' => ['examenesFisicos.update', $exFisico], 'method' => 'PUT', 'files' => true]) !!}

                            <h3>
                               <span class="label label-primary">{{ trans('tntmessage.General') }}</span>
                            </h3>
                            <hr>
                            <div class="input-group has-success form-inline">
                                <span class="input-group-addon" id="expediente">No. Expediente</span>
                                {!! form::text('expediente', $exFisico->expediente->id , ['class' => 'form-control', 'disabled']) !!}

                                <span class="input-group-addon" id="fechaconsulta">Fecha Consulta</span>
                                {!! form::text('fechaconsulta', $exFisico->consultaMedica->fechaconsulta , ['class' => 'form-control', 'disabled']) !!}

                                <span class="input-group-addon" id="title">Consulta</span>
                                {!! form::text('title', $exFisico->cita->title , ['class' => 'form-control', 'disabled']) !!}

                                <span class="input-group-addon" id="tipoexamen">Tipo de Examen</span>
                                {!! form::text('tipoexamen', $exFisico->tipoExamenFisico->nombreexamenfisico , ['class' => 'form-control', 'disabled']) !!}
                                
                            </div>
                            <hr>
                            <div class="input-group has-success form-inline">
                                <span class="input-group-addon" id="antesedentes">Sintomatologia</span>
                                {!! form::textArea('sintomatologia', $exFisico->consultaMedica->sintomatologia , ['class' => 'form-control ', 'disabled']) !!}
                            </div>
                            <hr>  
                             
                            <h2>
                               <span class="label label-danger">{{ trans('tntmessage.RespuestaExamen') }}</span>
                            </h2>
                            <hr> 
                            
                            <h3>
                               <span class="label label-primary">{{ trans('tntmessage.Archivos') }}</span>
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <h4>
                                        <span class="label label-primary">Imagen</span>
                                    </h4>
                                    <ul id="lightgallery">
                                        <li data-src="{{ asset('/storage/imagen')}}/{{ $exFisico->imagen->nombreimagen }}" data-sub-html="<h4>Imagen</h4><p>Resultado en base a Imagen del examen Fisico</p>">
                                            <a href="{{ asset('/storage/imagen')}}/{{ $exFisico->imagen->nombreimagen }}">
                                                <img src="{{ asset('/storage/imagen')}}/{{ $exFisico->imagen->nombreimagen }}" class="img-responsive">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-4">
                                    <h4>
                                        <span class="label label-primary">Video</span>
                                    </h4>
                                    @if($exFisico->resExamenFisico->idvideo)
                                    <video style="max-width: 80%;height: auto;" controls>
                                        <source src="{{ asset('/storage/video')}}/{{ $exFisico->video->nombrevideo }}" type="video/mp4">
                                    </video>
                                    @endif
                                </div>
                                <div class="col-xs-4">
                                    <h4>
                                        <span class="label label-primary">Audio</span>
                                    </h4>
                                    @if($exFisico->resExamenFisico->idaudio)
                                    <video controls>
                                        <source src="{{ asset('/storage/audio')}}/{{ $exFisico->audio->nombreaudio }}" type="video/ogg">
                                    </video>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="input-group has-success form-inline">
                                <span class="input-group-addon" id="resultadofisico">Descripcion de Resultado</span>
                                {!! form::textArea('resultadofisico', $exFisico->resExamenFisico->resultadofisico , ['class' => 'form-control ', 'disabled','maxlength'=>"250"]) !!}
                            </div>
                            <hr> 
                            <input type="hidden" name="idexamenfisico" value="{{ $exFisico->id }}">
                            <button type="submit" class="btn btn-success btn-lg"> {{trans('tntmessage.Regresar')}} </button>

                        {!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
