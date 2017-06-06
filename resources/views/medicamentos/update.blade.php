@extends('layouts.app')

@section('htmlheader_title')
	Actualizar Medicamentos
@endsection


@section('main-content')

    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Ingresar nuevo medicamento</div>

					<div class="panel-body">
						
					{!! Form::open(['route' => ['medicamentos.update',$medicamento->id],'method'=>'PUT'])!!}
							<div class="form-group col-md-12" align="center">
								{!!Form::label('codigomedicamento', 'Codigo del medicamento:')!!}
								{!!Form::text('codigomedicamento',$medicamento->codigomedicamento,['class'=>'form-control','placeholder'=>'D01AC08','required' ])!!}
							</div>

							<div class="form-group col-md-12" align="center">
								{!!Form::label('nombremedicamento', 'nombre del medicamento:')!!}
								{!!Form::text('nombremedicamento',$medicamento->nombremedicamento,['class'=>'form-control','placeholder'=>'acetaminofen','required' ])!!}
							</div>

							<div class="form-group" col-md-2" align="center">
					            {!! Form::label('idtipomedicamento','Tipo medicamento: ') !!}
					            {!! Form::select('idtipomedicamento',$tipoMedicamentos,null,['class'=>'form-control select-tipoMedicamento','placeholder'=>'seleccione un tipo de medicamento','required']) !!}
					        </div>

					        <div class="form-group col-md-12" align="center">
								{!!Form::label('viaadministracion', 'via de administracion:')!!}
								{!!Form::text('viaadministracion',$medicamento->viaadministracion,['class'=>'form-control','placeholder'=>'oral, intravenosa','required' ])!!}
							</div>

						    <div class="form-group col-md-12" align="center">
								{!!Form::label('concentracion', 'concentracion del medicamento:')!!}
								{!!Form::text('concentracion',$medicamento->concentracion,['class'=>'form-control','placeholder'=>'500 mg, 50 mL','required' ])!!}
							</div>

							<div class="form-group col-md-12" align="center">
								{!!Form::label('formafarmaceutica', 'forma farmaceutica del medicamento:')!!}
								{!!Form::text('formafarmaceutica',$medicamento->formafarmaceutica,['class'=>'form-control','placeholder'=>'capsula, pastilla, inyeccion','required' ])!!}
							</div>

							<div class="form-group col-md-12" align="center">
								{!!Form::label('observacion', 'Observacion del medicamento:')!!}
								{!!Form::text('observacion',$medicamento->observacion,['class'=>'form-control','placeholder'=>'No se debe usar en mujeres embarazadas','required' ])!!}
							</div>

							<div class="form-group col-md-12" align="center">
								{!!Form::label('preciomedicamento', 'precio del medicamento:')!!}
			     				 {!! Form::number('preciomedicamento',$medicamento->preciomedicamento,['class'=>'form-control','min'=>0.01,'step'=>0.01,'required']) !!}
							</div>

					      <div class="form-group">
                				<hr>
                				{!! form::submit('Actualizar', ['class'=> 'btn btn-primary']) !!}

			              </div>
							{!! Form::close() !!}						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection