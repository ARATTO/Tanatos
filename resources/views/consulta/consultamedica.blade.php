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

                    <div class="panel-body" disabled="false" >
                          {!! Form::submit('Guardar', ['class'=> 'pull-right btn btn-success btn-lg'  ]) !!}  
                    </div>
                                            
                     </div>
                    <div class="panel-body">
                        @include('bones-flash::bones.flash')
                        @include('layouts.partials.flash')  
                        {!! Form::open(['action' => 'ConsultaController@store']) !!}
                <form action="/foo/bar" method="POST">
                        <input type="hidden" name="_method" value="PUT">

                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->

                    <div>
                    <label for=""># Expediente:</label>
                    <input type="text" name="idexpediente" id="nombre" value="{{$consulta[0]->expedientes->id}}">
                    <label for=""># Cita:</label>
                    <input type="text" name="idcita" id="nombre" value="{{$consulta[0]->id}}">
                    </div>

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
                                                  {!! form::label('Peso','Peso:') !!}
                                                  {!! form::text('peso', null, ['class' => 'form-control ', 'placeholder'=> 'EN KG ejem:40.5', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('Temperatura','Temperatura:') !!}
                                                  {!! form::text('temperatura', null, ['class' => 'form-control ', 'placeholder'=> 'EN ºC ejem:30', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('Estatura','Estatura:') !!}
                                                  {!! form::text('estatura', null, ['class' => 'form-control ', 'placeholder'=> 'EN METROS ejem:1.65', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('PresionArterial','Presion Arterial:') !!}
                                                  {!! form::text('presionarterial', null, ['class' => 'form-control ', 'placeholder'=> 'EN mmHG ejem:90', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->  

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('RitmoCardiaco','Ritmo cardiaco:') !!}
                                                  {!! form::text('ritmocardiaco', null, ['class' => 'form-control ', 'placeholder'=> 'Veces por minuto ejem:70', 'required']) !!}
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
                                                  {!! form::text('descripciondesintomas', null, ['class' => 'form-control ', 'placeholder'=> 'TOS', 'required']) !!}
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group form-inline">
                                                  {!! form::label('DescripcionDeDiagnostico','Descripcion de Diagnostico:') !!}
                                                  {!! form::text('descripciondediagnostico', null, ['class' => 'form-control ', 'placeholder'=> 'PORTADORA DEL VIRUS H1N1', 'required']) !!}
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

                                            <h4><span  for="chosen-select" class="label label-info">Tipo Examen Fisico</span></h4>
                                                    @if($tipoexamenfisico != null)
                                                        <select class="form-inline" name="idtipoexamenfisico" id="chosen-select" data-placeholder="Seleccione el tipo de examen fisico...">
                                                            @foreach ($tipoexamenfisico as $tipf)
                                                                <option value="{{ $tipf->id }}">{{$tipf->nombreexamenfisico}}</option>
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
                                                        <select class="form-inline" name="idtipoexamenclinico" id="chosen-select" data-placeholder="Seleccione el tipo de examen clinico...">
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

                                            <h4><span  for="chosen-select" class="label label-info">Tipo de Tratamiento</span></h4>
                                                    @if($tipotratamiento != null)
                                                        <select class="form-inline" name="idtratamiento" id="chosen-select" data-placeholder="Seleccione el tratamiento...">
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

                                            <h4><span  for="chosen-select" class="label label-info">Enfermedad</span></h4>
                                                    @if($enfermedad != null)
                                                        <select class="form-inline" name="idenfermedad" id="chosen-select" data-placeholder="Seleccione la enfermedad...">
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

                                            <h4><span  for="chosen-select" class="label label-info">Medicamento</span></h4>
                                                    @if($medicamentos != null)
                                                        <select class="form-inline" name="idmedicamento" id="chosen-select" data-placeholder="Seleccione la enfermedad...">
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

                                            <h4><span  for="chosen-select" class="label label-info">Necesita Operacion</span></h4>
                                                    
                                                        <select class="form-inline" name="operacion" id="chosen-select" data-placeholder="Verifique ...">
                                                                <option value="true">Si</option>
                                                                <option value="false">No</option>
                                                            
                                                        </select>
                                                        <hr>
                                                    
                                     </div>
                                        
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                            </div>

                            

                        </div>
                                                </div>
                                            

                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                </form>                    
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- /.content -->
@endsection

