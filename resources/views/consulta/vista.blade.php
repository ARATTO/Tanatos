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
                    <div class="panel-heading"> TITULO DEL PANEL </div>
                    <div class="panel-body">
                        @include('bones-flash::bones.flash')
                        @include('layouts.partials.flash')  

                <form action="/foo/bar" method="POST">
                        <input type="hidden" name="_method" value="PUT">

                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->

                        

                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Signos Vitales</a></li>
                                            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Consulta</a></li>
                                            <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Examenes</a></li>
                                            <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Tratamiento</a></li>
                                            <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Ingreso</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                                <div class="panel-heading"  style="font-size: 24pt; ">Generalidades</div>

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="fechanacimiento">Peso:</label>
                                            <div>
                                            <input type="text" name="nombre" id="nombre" value="" >
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="direccion">Temperatura:</label>
                                            <div>
                                            <input type="textarea" name="nombre" id="nombre" value=""  style="width: 300px;">
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="telefono">Estatura :</label>
                                            <div>
                                            <input type="text" name="nombre" id="nombre" value=""  >
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="email">Presion Arterial :</label>
                                            <div>
                                            <input type="text" name="nombre" id="nombre" value=""  style="width: 300px;">
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->  

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="telfonoresponsable">Ritmo Cardiaco:</label>
                                            <div>
                                            <input type="text" name="nombre" id="nombre" value=""    >
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 --> 
                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab2">
                                <div class="panel-heading"  style="font-size: 24pt; ">Consulta Medica</div>  

                                    <div class="col-xs-6">
                                      <div class="input-group col-md-12">
                                        <div class="form-group">
                                            <label for="nombres">Nombres:</label>
                                            <div>
                                              <input type="text" name="nombre" id="nombre" value=""  style="width: 300px;">
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Descripcion de sintomas:</label>
                                            <div>
                                            <input type="text" name="nombre" id="nombre" value="" >
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="genero">Descripcion de diagnostico:</label>
                                            <div>
                                            <input type="text" name="nombre" id="nombre" value=""  style="width: 300px;">
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
                                            <label for="apellidos">Examen Fisico:</label>
                                            <div>
                                            <input type="text" name="nombre" id="nombre" value="" >
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Examen Clinico:</label>
                                            <div class="checkbox">
                                            <label>HECES</label>
                                            <input type="checkbox" value="paracetamol">
                                            
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab4">
                                <div class="panel-heading"  style="font-size: 24pt; ">Tratamiento</div>

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Tipo de tratamiento:</label>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                                                Seleccione una opción
                                                <span class="caret"></span>
                                                </button>
                                            <ul class="dropdown-menu">
                                                <li>Si</li>
                                                <li>No</li>
                                            </ul>
                                        </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Enfermedad:</label>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                                                Seleccione una opción
                                                <span class="caret"></span>
                                                </button>
                                            <ul class="dropdown-menu">
                                                <li>Si</li>
                                                <li>No</li>
                                            </ul>
                                        </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Dosis:</label>
                                            <div>
                                            <input type="text" name="nombre" id="nombre" value="" >
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Frecuencia:</label>
                                            <div>
                                            <input type="text" name="nombre" id="nombre" value="" >
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Medicamentos:</label>
                                            <div class="checkbox">
                                            <label>PARACETAMOL</label>
                                            <input type="checkbox" value="paracetamol">
                                            
                                            </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                                    
                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Necesita operacion:</label>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                                                Seleccione una opción
                                                <span class="caret"></span>
                                                </button>
                                            <ul class="dropdown-menu">
                                                <li>Si</li>
                                                <li>No</li>
                                            </ul>
                                        </div>
                                        </div>
                                        
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab5">
                                <div class="panel-heading"  style="font-size: 24pt; ">Ingreso</div>

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Necesita ser ingresado:</label>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                                                Seleccione una opción
                                                <span class="caret"></span>
                                                </button>
                                            <ul class="dropdown-menu">
                                                <li>Si</li>
                                                <li>No</li>
                                            </ul>
                                        </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Camilla:</label>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                                                Seleccione una opción
                                                <span class="caret"></span>
                                                </button>
                                            <ul class="dropdown-menu">
                                                <li>Si</li>
                                                <li>No</li>
                                            </ul>
                                        </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Sala:</label>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                                                Seleccione una opción
                                                <span class="caret"></span>
                                                </button>
                                            <ul class="dropdown-menu">
                                                <li>Si</li>
                                                <li>No</li>
                                            </ul>
                                        </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->

                                    <div class="col-xs-6">
                                      <div class="input-group col-xs-12">
                                        <div class="form-group">
                                            <label for="apellidos">Doctor:</label>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                                                Seleccione una opción
                                                <span class="caret"></span>
                                                </button>
                                            <ul class="dropdown-menu">
                                                <li>Si</li>
                                                <li>No</li>
                                            </ul>
                                        </div>
                                        </div>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                            </div>

                        </div>
                                                </div>
                                            

                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                </form>                    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- /.content -->
@endsection
