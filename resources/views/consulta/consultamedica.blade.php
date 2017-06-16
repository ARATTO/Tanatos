@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
    INICIO
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
    @include('layouts.partials.contentheader.consulta.consultamedica_head')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
                    <div class="panel-heading"> TITULO DEL PANEL

                    
                                            
                     </div>
                    <div class="panel-body">
                        @include('bones-flash::bones.flash')
                        @include('layouts.partials.flash')  
                        {!! Form::open(['action' => 'ConsultaController@store']) !!}
                

                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->

                    <div>
                    <label for=""># Expediente:</label>
                    <input type="text" name="idexpediente" id="nombre" value="{{$consulta[0]->expedientes->id}}" readonly>
                    <label for=""># Cita:</label>
                    <input type="text" name="idcita" id="nombre" value="{{$consulta[0]->id}}" readonly>

                    </div>
                    <br>

                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Signos Vitales</a></li>
                                            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Consulta</a></li>
                                            <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Examenes</a></li>
                                            <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Tratamiento</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                                <div class="panel-heading"  style="font-size: 24pt; ">Generalidades</div>

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('Peso','Peso:(Kg)') !!}
                                                  {!! form::number('peso', null, ['class' => 'form-control ', 'step'=>'any','placeholder'=> 'Ejem:40.5', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('Temperatura','Temperatura:(ºC )') !!}
                                                  {!! form::number('temperatura', null, ['class' => 'form-control ', 'step'=>'any', 'placeholder'=> 'Ejem:30', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('Estatura','Estatura:(Metros)') !!}
                                                  {!! form::number('estatura', null, ['class' => 'form-control ', 'step'=>'any', 'placeholder'=> 'Ejem:1.65', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('PresionArterial','Presion Arterial: (mmHG)') !!}
                                                  {!! form::number('presionarterial', null, ['class' => 'form-control ', 'step'=>'any', 'placeholder'=> 'Ejem:90', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->  

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('RitmoCardiaco','Ritmo cardiaco:(Latidos por minuto)') !!}
                                                  {!! form::number('ritmocardiaco', null, ['class' => 'form-control ', 'step'=>'any', 'placeholder'=> 'Ejem:70', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 --> 
                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab2">
                                <div class="panel-heading"  style="font-size: 24pt; ">Consulta Medica</div>  

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('DescripcionDeSintomas','Descripcion de sintomas:') !!}
                                                  {!! form::textarea('descripciondesintomas', null, ['class' => 'form-control ','rows'=>8 ,'placeholder'=> 'TOS', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('DescripcionDeDiagnostico','Descripcion de Diagnostico:') !!}
                                                  {!! form::textarea('descripciondediagnostico', null, ['class' => 'form-control ','rows'=>8, 'placeholder'=> 'PORTADORA DEL VIRUS H1N1', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab3">
                                <div class="panel-heading"  style="font-size: 24pt; ">Examenes</div>


                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">

                                            <h4><span  for="chosen-select1" class="label label-info">Tipo Examen Fisico</span></h4>
                                                    @if($tipoexamenfisico != null)
                                                        <select  class="form-inline" multiple   name="idtipoexamenfisico[]" id="tipoexamenfisico" data-placeholder="Seleccione el tipo de examen fisico...">
                                                            @foreach ($tipoexamenfisico as $tipf)
                                                            
                                                                <option value="{{ $tipf->id }}" >{{$tipf->nombreexamenfisico}}</option>
                                                            @endforeach
                                                        </select>
                                                        <hr>
                                                    @else
                                                        {!! form::label('#','No hay tipos de examenes fisicos') !!}
                                                    @endif 
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    
                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">

                                        <div class="form-group">

                                            <h4><span  for="chosen-select" class="label label-info">Tipo de Examen Clinico</span></h4>
                                                    @if($tipoexamenclinico != null)
                                                        <select class="chosen-select" name="idtipoexamenclinico[]" id="tipoexamenclinico" multiple data-placeholder="Seleccione el tipo de examen clinico...">
                                                            @foreach ($tipoexamenclinico as $tipc)
                                                                <option value="{{ $tipc->id }}">{{$tipc->nombreexamenclinico}}</option>
                                                            @endforeach
                                                        </select>
                                                        <hr>
                                                    @else
                                                        {!! form::label('#','No hay tipos de examenes clinicos') !!}
                                                    @endif 
                                     </div>
                                                          </div><!-- /input-group -->
                                                        </div>
                                                    <!-- /.col-lg-6 -->
                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab4">
                                <div class="panel-heading"  style="font-size: 24pt; ">Tratamiento</div>

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">

                                            <h4><span  for="chosen-select3" class="label label-info">Tipo de Tratamiento</span></h4>
                                                    @if($tipotratamiento != null)
                                                        <select class="form-inline" name="idtipotratamiento" id="tipotratamiento" data-placeholder="Seleccione el tratamiento...">
                                                            <option value="0">No se aplicara ningun tratamiento</option>
                                                            @foreach ($tipotratamiento as $tipt)
                                                                <option value="{{ $tipt->id }}">{{$tipt->nombretipotratamiento}}</option>
                                                            @endforeach
                                                        </select>
                                                        <hr>
                                                    @else
                                                        {!! form::label('#','No hay tipos de tratamientos') !!}
                                                    @endif 
                                     </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">

                                            <h4><span  for="chosen-select4" class="label label-info">Enfermedad</span></h4>
                                                    @if($enfermedad != null)
                                                        <select class="form-inline" name="idenfermedad" id="enfermedad" data-placeholder="Seleccione la enfermedad...">
                                                             <option value="0">No se detecto ninguna enfermedad</option>
                                                            @foreach ($enfermedad as $enf)
                                                                <option value="{{ $enf->id }}">{{$enf->nombreenfermedad}}</option>
                                                            @endforeach
                                                        </select>
                                                        <hr>
                                                    @else
                                                        {!! form::label('#','No hay enfermedades') !!}
                                                    @endif 
                                     </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('Dosis','Dosis:') !!}
                                                  {!! form::text('dosis', null, ['class' => 'form-control ', 'placeholder'=> 'Pedro', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('Frecuencia','Frecuencia:') !!}
                                                  {!! form::text('frecuencia', null, ['class' => 'form-control ', 'placeholder'=> 'Pedro', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">

                                            <h4><span  for="chosen-select5" class="label label-info">Medicamento</span></h4>
                                                    @if($medicamentos != null)
                                                        <select class="form-inline" multiple name="medicamentos[]" id="medicamentos" data-placeholder="Seleccione la enfermedad...">
                                                            @foreach ($medicamentos as $med)
                                                                <option value="{{ $med->id }}">{{$med->nombremedicamento}}</option>
                                                            @endforeach
                                                        </select>
                                                        <hr>
                                                    @else
                                                        {!! form::label('#','No hay medicamento') !!}
                                                    @endif 
                                     </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                                    
                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">

                                            <h4><span  for="chosen-select6" class="label label-info">Necesita Operacion</span></h4>
                                                <input value="true" name="operacion" type="checkbox"></input>
                                          <hr>
                                                    
                                     </div>
                                        
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                            </div>

                            

                        </div>

                                                </div>
                                                </div>
                    <div class="panel-footer" disabled="false" align="right" >
                          {!! Form::submit('Guardar', ['class'=> 'btn btn-success btn-lg'  ]) !!}  
                    </div>
                                            

                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                                   
                        {!! Form::close()!!}

                    </div>
                </div>
            </div>
        </div>
    
    </section><!-- /.content -->
@endsection

