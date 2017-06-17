
@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Examenes Fisicos
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
					<div class="panel-heading">Examenes Fisicos </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')						
						
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
									@foreach($examenesFisicos as $examenFisico)
										<tr>
											<td>{{ $examenFisico->consultaMedica->fechaconsulta }}</td>
                                            <td>{{ $examenFisico->expediente->id }}</td>
                                            <td>{{ $examenFisico->tipoExamenFisico->nombreexamenfisico }}</td>
											<td>
											
												@if($examenFisico->idresultadoexamenfisico != null)
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

												@if($examenFisico->idresultadoexamenfisico != null)
													<!-- Examen con Respuesta -->
													<div class="btn-group btn-group-sm" role="group" aria-label="...">
														<a href=" {{ route('examenesFisicos.edit' , $examenFisico->id) }} " title="Editar Examen" class="btn btn-success">
															<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
														</a>
													</div>
													
												@else
													<!-- Examen pendiente de Resppuesta -->
													<div class="btn-group btn-group-sm" role="group" aria-label="...">
														<a href=" {{ route('examenesFisicos.show' , $examenFisico->id) }} " title="Ver Examen" class="btn btn-info">
															<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
														</a>
													</div>
												@endif

												
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
