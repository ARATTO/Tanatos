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
                            @foreach($consulta as $exp)
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


        
    
                            
                          </form>

                          <table class="table table-striped" > 
                            <thead>
                              <th>Cita</th>
                              <th>Motivo</th>
                              <th>Inicio</th>
                              <th>Fin</th>
                            </thead>
                            <tbody>
                              
                              @if(count($exp->cita)>0)
                              @foreach($exp->cita as $ci)
                                <tr>
                                <td>{{$ci->id}} </td>
                                <td>{{$ci->title}} </td>
                                <td>{{$ci->start}} </td>
                                <td>{{$ci->fin}} </td>
                                </tr>
                              @endforeach
                              @endif 
                            
                            </tbody>
                          </table>                      
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- /.content -->
@endsection

