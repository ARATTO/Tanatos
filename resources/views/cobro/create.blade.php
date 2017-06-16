
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Cobro
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
					<div class="panel-heading"> Seleccion de servicios </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						
						
                    <div class="form-group">
                        <h4><span for="chosen-select" class="label label-info">Seleccione el servicio a cobrar</span><h4>
                                @if($precio != null)
                                    <select class="form-inline" name="idservicio" id="chosen-select" data-placeholder="Seleccione el servicio a cobrar..." multiple="true">
                                        @foreach ($precio as $pre)
                                            <option value="{{ $pre->id }}">{{$pre->nombreprecioespecial}}</option>
                                        @endforeach
                                    </select>
                                    <hr>
                                @else
                                    {!! form::label('#','No existen servicios') !!}
                                @endif 
                    </div>							

					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
