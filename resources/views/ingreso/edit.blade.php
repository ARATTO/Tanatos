
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
	Actualizar Ingreso
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
	@include('layouts.partials.contentheader._default')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->


	<div class="container spark-screen">
		<div class="row" >
			<div class="col-md-10 col-md-offset-1"  >
				<div class="panel panel-default">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
					<div class="panel-heading"> Actualizar Ingreso</div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')

                        <button style="background: #58D3F7; font: bold;" type="button" onclick="mostrar()" class="btn">Mostrar Expediente </button>
                        <button style=" position: absolute; right: 30px; background:#638cb5; font: bold;" type="button" onclick="ocultar()" class="btn">Ocultar Expediente </button>
            {!! Form::open(['route' => ['ingreso.update',$ingreso[0]->id],'method'=>'PUT']) !!}   
<section style="display: none" id="bloqueExpediente">
<div style="display: none;">
@if(count($ingreso)>0)
    <input type="number" name="idexpediente" value="{{$ingreso[0]->id}}">
@endif
</div>
                         @foreach($ingreso as $exp)
<br>
        <div class="col-xs-6">

          <div class="input-group col-md-12">
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <div>
                  <input type="text" name="primernombre" id="primernombre" value="{{ $exp->expedientes->personas->primernombre }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                  <input type="text" name="segundonombre" id="segundonombre}" value="{{  $exp->expedientes->personas->segundonombre}} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <div>
                <input type="text" name="primerapellido" id="primerapellido" value="{{  $exp->expedientes->personas->primerapellido }} " readonly="readonly">
                </div>
                <div>
                <input type="text" name="segundoapellido " id="segundoapellido " value="{{  $exp->expedientes->personas->segundoapellido }} " readonly="readonly">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="genero">DUI:</label>
                <div>
                <input type="text" name="dui id="dui" value="{{  $exp->expedientes->personas->dui }} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="genero">Genero:</label>
                <div>
                <input type="text" name="genero" id="genero" value="{{  $exp->expedientes->personas->genero }} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->


        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="fechanacimiento">Fecha de Nacimiento:</label>
                <div>
                <input type="date" name="fechanacimiento id="fechanacimiento" value="{{  $exp->expedientes->personas->fechanacimiento }} " readonly="readonly">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <div>
                <input type="textarea" name="calle" id="calle " value="{{ $exp->expedientes->personas->detallesDirecciones->calle }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="colonia" id="colonia" value="{{ $exp->expedientes->personas->detallesDirecciones->colonia}} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="pasaje" id="pasaje" value="{{ $exp->expedientes->personas->detallesDirecciones->pasaje }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="casa" id="casa" value="{{ $exp->expedientes->personas->detallesDirecciones->casa }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="nombremunicipio" id="nombremunicipio" value="{{ $exp->expedientes->personas->detallesDirecciones->municipios->nombremunicipio }}" readonly="readonly" style="width: 300px;">
                </div>

            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telefono">Telefonos:</label>
                <div>
                <input type="text" name="casatelefono" id="casatelefono" value="{{ $exp->expedientes->personas->telefonos->casatelefono}} " readonly="readonly" >
                </div>
                <div>
                <input type="text" name="trabajotelefono " id="trabajotelefono " value="{{ $exp->expedientes->personas->telefonos->trabajotelefono }} " readonly="readonly" >
                </div>
                <div>
                <input type="text" name="celulartelefono" id="celulartelefono" value="{{ $exp->expedientes->personas->telefonos->celulartelefono }} " readonly="readonly" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="email">Email:</label>
                <div>
                <input type="text" name="email id="email" value="{{ $exp->expedientes->personas->users->email }}" readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

         
        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Estado Civil:</label>
                <div>
                <input type="text" name="nombreestadocivil" id="nombreestadocivil" value="{{ $exp->expedientes->personas->estadosCiviles->nombreestadocivil }}" readonly="readonly"  style="width: 300px;" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 --> 


        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Madre:</label>
                <div>
                <input type="text" name="nombremadre" id="nombremadre" value="{{ $exp->expedientes->historialesClinicos->nombremadre }}" readonly="readonly"  style="width: 300px;" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Padre:</label>
                <div>
                <input type="text" name="nombrepadre" id="nombrepadre" value="{{ $exp->expedientes->historialesClinicos->nombrepadre }}" readonly="readonly"   >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Antecedentes:</label>
                <div>
                <input type="text" name="antesedentes" id="antesedentes" value="{{ $exp->expedientes->historialesClinicos->antesedentes }}" readonly="readonly"  style="width: 300px;" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 --> 


        
    @endforeach                     
</section>  

<br>
<br>


<section>
        <div class=" form-center">
            <h3>
            
                <span class="label label-primary">{{ trans('Datos de Ingreso') }}</span>
            </h3>
            <br>
                <br>
                <div class="form-group">

                        <h4><span  for="chosen-select" class="label label-info">Hospitales</span></h4>
                                @if($hospital != null)
                                    <select class="form-inline" name="idhospital" id="chosen-select" data-placeholder="Seleccione el hospital...">
                                        @foreach ($hospital as $mun)
                                            <option value="{{ $mun->id }}">{{$mun->nombre}}</option>
                                        @endforeach
                                    </select>
                                    <hr>
                                @else
                                    {!! form::label('#','No hay hospitales') !!}
                                @endif 
                 </div>

                        <div class="form-group">    
                                <h4><span for="chosen-select" class="label label-info">Doctores</span><h4>
                                @if($doctor != null)
                                    <select name="iddoctor" id="chosen-select_" data-placeholder="Seleccione el doctor a cargo...">
                                        <option value="{{$ingreso[0]->doctores->id}}">{{$ingreso[0]->doctores->nombredoctor}}</option>
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
                         <div class="form-group">     
                                {!!Form::label('ingreso', trans('Fecha de ingreso'))!!}
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name='fechaingreso' id='fechaIngreso' required value="{{$ingreso[0]->fechaingreso}}"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <br><br>
                            </div>


                         <div class="form-group">     
                                {!!Form::label('alta', trans('Fecha de alta'))!!}
                                <div class='input-group date' id='datetimepicker2'>
                                    <input type='text' class="form-control" name='fechasalida' id='fechaalta' value="{{$ingreso[0]->fechasalida}}"/>
                                    <span class="input-group-addon" >
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                

                                <br><br>
                        </div>


                        <div class="form-group">    
                                <h4><span for="chosen-select" class="label label-info">Sala</span><h4>
                                @if($sala != null)
                                    <select name="idsala" id="chosen_sala" data-placeholder="Seleccione la sala...">
                                        <option value="{{$ingreso[0]->salas->id}}">{{$ingreso[0]->salas->numerosala}}</option>                                    
                                        @foreach ($sala as $doc)
                                            <option value="{{ $doc->id }}">{{$doc->numerosala}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    {!! form::label('#','No existen salas') !!}
                                @endif  
                                <hr>  
                        </div> 


                        <div class="form-group">    
                                <h4><span for="chosen-select" class="label label-info">Camilla</span><h4>
                                @if($camilla != null)
                                    <select name="idcamilla" id="chosen_camilla" data-placeholder="Seleccione la camilla...">
                                        <option value="{{$ingreso[0]->camillas->id}}">{{$ingreso[0]->camillas->numerocamilla}}</option>                                    
                                        @foreach ($camilla as $doc)
                                            <option value="{{ $doc->id }}">{{$doc->numerocamilla}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    {!! form::label('#','No existen camillas') !!}
                                @endif  
                                <hr>  
                        </div> 



                
                <div class="form-group form-inline">
                    <h3><span class="label label-danger">{{ trans('Actualizar Datos') }}</span><h3>
                    <button type="submit" class="btn btn-success btn-lg"> {{trans('tntmessage.Actualizar')}} </button>
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


  </script>