@extends('layouts.app')

@section('htmlheader_title')
 Consulta
@endsection

@section('main-content')
    @include('layouts.partials.contentheader.user.index_head')


@section('main-content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height:2000px !important;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

    
      @include('flash::message')

      <form action="/foo/bar" method="POST">
        <input type="hidden" name="_method" value="PUT">

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <br></br>
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('tntmessage.Usuario') }}
                        <a href="{{ route('users.create') }}">
                        <button type="button" class="btn btn-success btn-xs pull-right">
                            {{ trans('tntmessage.CrearUsuario') }}
                        </button>
                        </a>
                    </div>

        
        <div class="panel-heading" >
                    <div class="panel-body">

















































































































































































                        3...................................................................................................................................................................................................................2222222222222222222222222222233333333

                        3.
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
</form>
<section class="content"  id="contenido_principal">
        </section>

      <!-- cargador empresa -->
        <div style="display: none;" id="cargador_empresa" align="center">
            <br>


         <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

         <img src="imagenes/cargando.gif" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

          <br>
         <hr style="color:#003" width="50%">
         <br>
       </div>





      </div><!-- /.content-wrapper -->





    </div><!-- ./wrapper -->
</section><!-- /.content -->



@endsection