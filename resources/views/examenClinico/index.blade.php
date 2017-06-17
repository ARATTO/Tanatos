
@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Examenes Clinicos
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
					<div class="panel-heading">Examenes Clinicos </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						
						@if($examenesClinicos != null)
                        <table id="TablaLista" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Fecha Consulta</th>
										<th>No. Expediente</th>
										<th>Examen</th>
										<th>Estado</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Fecha Consulta</th>
										<th>No. Expediente</th>
										<th>Examen</th>
										<th>Estado</th>
										<th>Accion</th>
									</tr>
								</tfoot>
								<tbody>
									@foreach($examenesClinicos as $examenClinico)
										<tr>
											<td>{{ $examenClinico->consultaMedica->fechaconsulta }}</td>
                                            <td>{{ $examenClinico->expediente->id }}</td>
                                            <td>{{ $examenClinico->tipoExamenClinico->nombreexamenclinico }}</td>
											<td>
											
												@if($examenClinico->idresultadoexamenclinico != null)
													<!-- Examen con Respuesta -->
													<a href="#" class="btn btn-success btn-block" disabled="disabled">
												    	{{trans('tntmessage.Terminado')}}
													</a>
												@else
													<!-- Examen pendiente de Resppuesta -->
													<a href="#" class="btn btn-info btn-block" disabled="disabled">
												    	{{trans('tntmessage.Pendiente')}}
													</a>
												@endif
											
											</td>
											<td>

												@if($examenClinico->idresultadoexamenclinico != null)
													<!-- Examen con Respuesta -->
													<div class="btn-group btn-group-sm" role="group" aria-label="...">
														<a href=" {{ route('examenesClinicos.edit' , $examenClinico->id) }} " title="Editar Examen" class="btn btn-success">
															<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
														</a>
													</div>
													
												@else
													<!-- Examen pendiente de Resppuesta -->
													<div class="btn-group btn-group-sm" role="group" aria-label="...">
														<a href=" {{ route('examenesClinicos.show' , $examenClinico->id) }} " title="Ver Examen" class="btn btn-info">
															<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
														</a>
													</div>
												@endif

												
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
                        @else
                        No hay Examenes Clinicos.
                        @endif
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
