
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	INICIO
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
					<div class="panel-heading"> EXAMENES </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						
						
                         {!! Form::open(['route' => 'demos.store', 'method' => 'POST', 'files' => true]) !!}

                            <div class="form-group">
                                    {!! form::label('#','Imagen') !!}    
                                <input id="input-img" type="file" multiple class="file-loading" name="img[]" >
                            </div>
							<div class="form-group">
                                    {!! form::label('#','Video') !!}    
                                <input id="input-video" type="file" multiple class="file-loading" name="video[]" >
                            </div>
							<div class="form-group">
                                    {!! form::label('#','Audio') !!}    
                                <input id="input-audio" type="file" multiple class="file-loading" name="audio[]" >
                            </div>
                            <button type="submit" class="btn btn-success"> {{trans('tntmessage.Guardar')}} </button>

                        {!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
