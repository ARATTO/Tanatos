
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Ingresar paciente
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
	@include('layouts.partials.contentheader._default')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->


	<div class="container spark-screen" onmouseover="compararFechas()">
		<div class="row" >
			<div class="col-md-10 col-md-offset-1"  >
				<div class="panel panel-default">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
					<div class="panel-heading"> Ingresar paciente </div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')

                        <button style="background: #58D3F7; font: bold;" type="button" onclick="mostrar()" class="btn">Mostrar Expediente </button>
                        <button style=" position: absolute; right: 30px; background:#638cb5; font: bold;" type="button" onclick="ocultar()" class="btn">Ocultar Expediente </button>
{!! Form::open(['action' =>'IngresoController@store','class'=>'form-center' ]) !!}
<section style="display: none" id="bloqueExpediente">
<div style="display: none;">
@if(count($expediente)>0)
    <input type="number" name="idexpediente" value="{{$expediente[0]->id}}">
@endif
</div>
                         @foreach($expediente as $exp)
<br>
        <div class="col-xs-6">

          <div class="input-group col-md-12">
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <div>
                  <input type="text" name="primernombre" id="primernombre" value="{{ $exp->personas->primernombre }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                  <input type="text" name="segundonombre" id="segundonombre}" value="{{  $exp->personas->segundonombre}} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <div>
                <input type="text" name="primerapellido" id="primerapellido" value="{{  $exp->personas->primerapellido }} " readonly="readonly">
                </div>
                <div>
                <input type="text" name="segundoapellido " id="segundoapellido " value="{{  $exp->personas->segundoapellido }} " readonly="readonly">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="genero">DUI:</label>
                <div>
                <input type="text" name="dui id="dui" value="{{  $exp->personas->dui }} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="genero">Genero:</label>
                <div>
                <input type="text" name="genero" id="genero" value="{{  $exp->personas->genero }} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->


        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="fechanacimiento">Fecha de Nacimiento:</label>
                <div>
                <input type="date" name="fechanacimiento id="fechanacimiento" value="{{  $exp->personas->fechanacimiento }} " readonly="readonly">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <div>
                <input type="textarea" name="calle" id="calle " value="{{ $exp->personas->detallesDirecciones->calle }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="colonia" id="colonia" value="{{ $exp->personas->detallesDirecciones->colonia}} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="pasaje" id="pasaje" value="{{ $exp->personas->detallesDirecciones->pasaje }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="casa" id="casa" value="{{ $exp->personas->detallesDirecciones->casa }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="nombremunicipio" id="nombremunicipio" value="{{ $exp->personas->detallesDirecciones->municipios->nombremunicipio }}" readonly="readonly" style="width: 300px;">
                </div>

            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telefono">Telefonos:</label>
                <div>
                <input type="text" name="casatelefono" id="casatelefono" value="{{ $exp->personas->telefonos->casatelefono}} " readonly="readonly" >
                </div>
                <div>
                <input type="text" name="trabajotelefono " id="trabajotelefono " value="{{ $exp->personas->telefonos->trabajotelefono }} " readonly="readonly" >
                </div>
                <div>
                <input type="text" name="celulartelefono" id="celulartelefono" value="{{ $exp->personas->telefonos->celulartelefono }} " readonly="readonly" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="email">Email:</label>
                <div>
                <input type="text" name="email id="email" value="{{ $exp->personas->users->email }}" readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

         
        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Estado Civil:</label>
                <div>
                <input type="text" name="nombreestadocivil" id="nombreestadocivil" value="{{ $exp->personas->estadosCiviles->nombreestadocivil }}" readonly="readonly"  style="width: 300px;" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 --> 


        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Madre:</label>
                <div>
                <input type="text" name="nombremadre" id="nombremadre" value="{{ $exp->historialesClinicos->nombremadre }}" readonly="readonly"  style="width: 300px;" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Padre:</label>
                <div>
                <input type="text" name="nombrepadre" id="nombrepadre" value="{{ $exp->historialesClinicos->nombrepadre }}" readonly="readonly"   >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Antecedentes:</label>
                <div>
                <input type="text" name="antesedentes" id="antesedentes" value="{{ $exp->historialesClinicos->antesedentes }}" readonly="readonly"  style="width: 300px;" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 --> 


        
    @endforeach                     
</section>  

<br>
<br>


<section onmouseover="compararFechas()">
        <div class=" form-center" onmouseover="compararFechas()">
            <h3>
            
                <span class="label label-primary">{{ trans('Datos de Ingreso') }}</span>
            </h3>
            <br>
                <br>
                <div class="form-group">

                        <h4><span  for="chosen-select" class="label label-info">Hospitales</span></h4>
                                @if($hospital != null)
                                    <select class="form-inline" name="idhospital" id="chosen-select" data-placeholder="Seleccione el hospital..." onmouseover="compararFechas()">
                                        @foreach ($hospital as $mun)
                                            <option value="{{ $mun->id }}">{{$mun->nombre}}</option>
                                        @endforeach
                                    </select>
                                    <hr>
                                @else
                                    {!! form::label('#','No hay hospitales') !!}
                                @endif 
                 </div>

                        <div class="form-group" onmouseover="compararFechas()">    
                                <h4><span for="chosen-select" class="label label-info">Doctores</span><h4>
                                @if($doctor != null)
                                    <select name="iddoctor" id="chosen-select_" data-placeholder="Seleccione el doctor a cargo..." onmouseover="compararFechas()">
                                        @foreach ($doctor as $doc)
                                            <option value="{{ $doc->id }}">{{$doc->nombredoctor}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    {!! form::label('#','No existen doctores') !!}
                                @endif  
                                <hr>  
                        </div>

                         <h4><span for="chosen-select" class="label label-info">Fechas</span><h4>
                         <div class="form-group" onmouseover="compararFechas()">     
                                {!!Form::label('ingreso', trans('Fecha de ingreso'))!!}
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name='fechaingreso' id='fechaIngreso' required onchange="compararFechas()" onclick="compararFechas()" onmouseover="compararFechas()"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar" onclick="compararFechas()" onmouseover="compararFechas()"></span>
                                    </span>
                                </div>
                                <br><br>
                            </div>


                         <div class="form-group" onmouseover="compararFechas()">     
                                {!!Form::label('alta', trans('Fecha de alta'))!!}
                                <div class='input-group date' id='datetimepicker2'>
                                    <input type='text' class="form-control" name='fechasalida' id='fechaalta' onchange="compararFechas()" onclick="compararFechas()" onmouseover="compararFechas()" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar" onclick="compararFechas()" onmouseover="compararFechas()"></span>
                                    </span>
                                </div>
                                

                                <br><br>
                        </div>


                        <div class="form-group" onmouseover="compararFechas()">    
                                <h4><span for="chosen-select" class="label label-info">Sala</span><h4>
                                @if($sala != null)
                                    <select name="idsala" id="chosen_sala" data-placeholder="Seleccione la sala..." onmouseover="compararFechas()">
                                        @foreach ($sala as $doc)
                                            <option value="{{ $doc->id }}">{{$doc->numerosala}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    {!! form::label('#','No existen salas') !!}
                                @endif  
                                <hr>  
                        </div> 


                        <div class="form-group" onmouseover="compararFechas()">    
                                <h4><span for="chosen-select" class="label label-info">Camilla</span><h4>
                                @if($camilla != null)
                                    <select name="idcamilla" id="chosen_camilla" data-placeholder="Seleccione la camilla..." onmouseover="compararFechas()">
                                        @foreach ($camilla as $doc)
                                            <option value="{{ $doc->id }}">{{$doc->numerocamilla}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    {!! form::label('#','No existen camillas') !!}
                                @endif  
                                <hr>  
                        </div> 



                
                <div class="form-group form-inline" id="crear" style="display: none">
                    <h3><span class="label label-danger">{{ trans('Guardar Datos') }}</span><h3>
                    <button type="submit" class="btn btn-success btn-lg"> {{trans('tntmessage.Crear')}} </button>
                </div> 

     </div>

</section>
{!! Form::close() !!}       
   
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- HTML -->


	</section><!-- /.content -->
@endsection



<script type="text/javascript">

  function mostrar(){
   document.getElementById('bloqueExpediente').style.display = 'block'; 
    
  }


  function ocultar(){
   document.getElementById('bloqueExpediente').style.display = 'none'; 
    
  }
        function compararFechas() {
        

            var finicio = document.getElementById('fechaIngreso').value;
            var ffin= document.getElementById('fechaalta').value;
              
                var fecha1 = new Date(finicio);
                var fecha2 = new Date(ffin);

                var fecha3 = fecha2 - fecha1;

               

                var fecha = (((fecha3/1000.0)/60.0)/60)/24.0;
                
                 
                if (fecha>0.04) {
                    document.getElementById('crear').style.display = 'block';
                    
                }else{
                    document.getElementById('crear').style.display = 'none';
                }
                
        }

  </script>