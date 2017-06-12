@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
    INICIO
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
    @include('layouts.partials.contentheader.expediente.vista_head')
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
                            @foreach($consulta as $con)

                                <div class="col-xs-6">
                                  <div class="input-group col-md-12">
                                    <div class="form-group">
                                        <label for="nombres">Nombres:</label>
                                        <div>
                                          <input type="text" name="nombre" id="nombre" value="{{ $con->primernombre }} " readonly="readonly" style="width: 300px;">
                                        </div>
                                        <div>
                                          <input type="text" name="nombre" id="nombre" value="{{ $con->segundonombre }} " readonly="readonly" style="width: 300px;">
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->

                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="apellidos">Apellidos:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->primerapellido }} " readonly="readonly">
                                        </div>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->segundoapellido }} " readonly="readonly">
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->

                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="genero">DUI:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->dui }} " readonly="readonly" style="width: 300px;">
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->

                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="genero">Genero:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->genero }} " readonly="readonly" style="width: 300px;">
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->


                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="fechanacimiento">Fecha de Nacimiento:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->fechanacimiento }} " readonly="readonly">
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->

                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="direccion">Direccion:</label>
                                        <div>
                                        <input type="textarea" name="nombre" id="nombre" value="{{ $con->calle }} " readonly="readonly" style="width: 300px;">
                                        </div>
                                        <div>
                                        <input type="textarea" name="nombre" id="nombre" value="{{ $con->colonia }} " readonly="readonly" style="width: 300px;">
                                        </div>
                                        <div>
                                        <input type="textarea" name="nombre" id="nombre" value="{{ $con->pasaje }} " readonly="readonly" style="width: 300px;">
                                        </div>
                                        <div>
                                        <input type="textarea" name="nombre" id="nombre" value="{{ $con->casa }} " readonly="readonly" style="width: 300px;">
                                        </div>
                                        <div>
                                        <input type="textarea" name="nombre" id="nombre" value="{{ $con->nombremunicipio }}" readonly="readonly" style="width: 300px;">
                                        </div>

                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->

                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="telefono">Telefonos:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->casatelefono }} " readonly="readonly" >
                                        </div>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->trabajotelefono }} " readonly="readonly" >
                                        </div>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->celulartelefono }} " readonly="readonly" >
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->

                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->email }}" readonly="readonly" style="width: 300px;">
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->  

                                 
                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="telfonoresponsable">Estado Civil:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con->nombreestadocivil }}" readonly="readonly"  style="width: 300px;" >
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 --> 


                                @foreach($consulta2 as $con2)
                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="telfonoresponsable">Madre:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con2->nombremadre }}" readonly="readonly"  style="width: 300px;" >
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->  

                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="telfonoresponsable">Padre:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con2->nombrepadre }}" readonly="readonly"   >
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->  

                                <div class="col-xs-6">
                                  <div class="input-group col-xs-12">
                                    <div class="form-group">
                                        <label for="telfonoresponsable">Antecedentes:</label>
                                        <div>
                                        <input type="text" name="nombre" id="nombre" value="{{ $con2->antesedentes }}" readonly="readonly"  style="width: 300px;" >
                                        </div>
                                    </div>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 --> 
                                @endforeach

                                
                            @endforeach
                            
                          </form>

                          <table class="table table-striped" > 
                            <thead>
                              <th>Cita</th>
                              <th>Motivo</th>
                              <th>Inicio</th>
                              <th>Fin</th>
                            </thead>
                            <tbody>
                              @foreach($expedientes as $expediente)
                                <tr>
                                <td>{{$expediente->id}} </td>
                                <td>{{$expediente->title}} </td>
                                <td>{{$expediente->start}} </td>
                                <td>{{$expediente->fin}} </td>
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

