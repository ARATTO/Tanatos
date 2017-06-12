@extends('layouts.app')

@section('htmlheader_title')
	Ingresar Doctores
@endsection


@section('main-content')

    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Ingresar nuevo doctor</div>

					<div class="panel-body">
						
							{!! Form::open(['action' =>'DoctorController@store','class'=>'form-center' ]) !!}
							<div class="form-group col-md-8" align="center">
								{!!Form::label('nombredoctor', 'Nombre y apellido del doctor:')!!}

								<select name="idpersona" id="chosen-select_" data-placeholder="Seleccione estado civil a asignar...">
                                                            @foreach ($personas1 as $persona)
                                                                <option value="{{ $persona->id }}">{{$persona->nombredoctor}}</option>
                                                            @endforeach
                                                        </select>

								
							</div>



                            <div class="form-group col-md-8" align="center">
					            {!! Form::label('idespecialidad','Especialidad: ') !!}
					            {!! Form::select('idespecialidad',$especialidades,null,['class'=>'form-control select-especialidad','placeholder'=>'seleccione una especialidad','required', 'id'=>'chosen-select_']) !!}
					        </div>


				        <div class="form-group col-md-8" align="center">
				            <label>¿Trabaja en emergencias?:</label>
				            <div class="col-sm-10" align="center">
				                <p><input type="radio" name="esemergencia" value="TRUE" checked="">Si</p>
				                <p><input type="radio" name="esemergencia" value="FALSE">No</p>
				            </div>
				        </div>


					      <div class="form-group col-md-4" align="center">
                				<hr>
                				{!! form::submit('Guardar', ['class'=> 'btn btn-primary']) !!}

			              </div>
							{!! Form::close() !!}						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection