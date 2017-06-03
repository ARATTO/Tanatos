@extends('layouts.app')

@section('htmlheader_title')
	Actualizar Doctores
@endsection


@section('main-content')

    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Actualizar nuevo medicamento</div>

					<div class="panel-body">
						
					{!! Form::open(['route' => ['doctores.update',$doctor->id],'method'=>'PUT'])!!}
							<div class="form-group col-md-12" align="center">
								{!!Form::label('nombredoctor', 'Nombre del doctor:')!!}
								{!!Form::text('nombredoctor',$doctor->nombredoctor,['class'=>'form-control','placeholder'=>'Rodrigo Daniel','required' ])!!}
							</div>

							<div class="form-group col-md-12" align="center">
								{!!Form::label('especialidad', 'Especialidad del doctor:')!!}
								{!!Form::text('especialidad',$doctor->especialidad,['class'=>'form-control','placeholder'=>'Cirujano','required' ])!!}
							</div>

		        			<div class="form-group col-md-12" align="center">
					            <label>¿Trabaja en emergencias?:</label>
					            <div class="col-sm-10" align="center">
					                <p><input type="radio" name="esemergencia" value="TRUE" checked="">Si</p>
					                <p><input type="radio" name="esemergencia" value="FALSE">No</p>
					            </div>
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