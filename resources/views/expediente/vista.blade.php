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
                    <div class="panel-heading"> EXPEDIENTE </div>
                    <div class="panel-body">
                        @include('bones-flash::bones.flash')
                        @include('layouts.partials.flash')
                        {!! Form::open(['action' => 'ConsultaController@store']) !!}
                        
                        
                            @foreach($consulta as $exp)
<br>
        <div class="col-xs-6">

          <div class="input-group col-md-12">
            <div class="form-group">
                <div class="form-group form-inline">
                      {!! form::label('PrimerNombre','Nombres:') !!}
                      {!! form::text('primernombre', $exp->personas->primernombre , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                      {!! form::text('segundonombre',$exp->personas->segundonombre, ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                
                <div class="form-group form-inline">
                      {!! form::label('PrimerNombre','Apellidos:') !!}
                      {!! form::text('primerapellido', $exp->personas->primerapellido , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                      {!! form::text('segundoapellido',$exp->personas->segundoapellido, ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <div class="form-group form-inline">
                      {!! form::label('Dui','D.U.I:') !!}
                      {!! form::text('dui', $exp->personas->dui , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                      
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <div class="form-group form-inline">
                      {!! form::label('Genero','Genero:') !!}
                      {!! form::text('genero', $exp->personas->genero  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->


        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <div class="form-group form-inline">
                      {!! form::label('FechaNacimiento','Fecha de Nacimiento:') !!}
                      {!! form::text('fechanacimiento', $exp->personas->fechanacimiento  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">

                <table class="table table-striped" > 
                    <caption>Telefonos</caption>
                  <tr>
                    <th>{!! form::label('TelfCasa','Telefono de Casa:') !!}</th>
                    <th>{!! form::text('casatelefono', $exp->personas->telefonos->casatelefono  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}</th>
                  </tr>
                  <tr>
                    <td>{!! form::label('TelfTra','Telefono de Trabajo:') !!}</td>
                    <td>{!! form::text('trabajotelefono', $exp->personas->telefonos->trabajotelefono  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}</td>
                  </tr>
                  <tr>
                    <td>{!! form::label('Celular','Celular:') !!}</td>
                    <td>{!! form::text('celulartelefono',  $exp->personas->telefonos->celulartelefono , ['class' => 'form-control ' ,'readonly' => 'true']) !!}</td>
                  </tr>
                  
              </table> 
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div>
        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <table class="table table-striped" > 
                    <caption>Direccion</caption>
                  <tr>
                    <th>{!! form::label('Calle','Calle:') !!}</th>
                    <th>{!! form::text('calle', $exp->personas->detallesDirecciones->calle  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                    </th>
                  </tr>
                  <tr>
                    <td>{!! form::label('Colonia','Colonia:') !!}</td>
                    <td>{!! form::text('colonia', $exp->personas->detallesDirecciones->colonia  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}</td>
                  </tr>
                  <tr>
                    <td>{!! form::label('Pasaje','Pasaje:') !!}</td>
                    <td>{!! form::text('pasaje', $exp->personas->detallesDirecciones->pasaje   , ['class' => 'form-control ' ,'readonly' => 'true']) !!}</td>
                  </tr>
                  <tr>
                    <td>{!! form::label('Casa','Casa:') !!}</td>
                    <td>{!! form::text('casa',  $exp->personas->detallesDirecciones->casa  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}</td>
                  </tr>
                  <tr>
                    <td>{!! form::label('Municipio','Municipio:') !!}</td>
                    <td>{!! form::text('nombremunicipio', $exp->personas->detallesDirecciones->municipios->nombremunicipio  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}</td>
                  </tr>
              </table> 
            </div>
        </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <div class="form-group form-inline">
                      {!! form::label('Email','Email:') !!}
                      {!! form::email('email', $exp->personas->users->email , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

         
        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <div class="form-group form-inline">
                      {!! form::label('EstadoCivil','Estado Civil:') !!}
                      {!! form::text('nombreestadocivil', $exp->personas->estadosCiviles->nombreestadocivil  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 --> 


        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <div class="form-group form-inline">
                      {!! form::label('NombreMadre','Nombre de Madre:') !!}
                      {!! form::text('nombremadre', $exp->historialesClinicos->nombremadre   , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <div class="form-group form-inline">
                      {!! form::label('NombrePadre','Nombre de Padre:') !!}
                      {!! form::text('nombrepadre', $exp->historialesClinicos->nombrepadre  , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <div class="form-group form-inline">
                      {!! form::label('Antecedentes','Antecedentes:') !!}
                      {!! form::text('antesedentes', $exp->historialesClinicos->antesedentes , ['class' => 'form-control ' ,'readonly' => 'true']) !!}
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 --> 
                          <div><table class="table table-striped" > 
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
                         
                          </div> 

                          <div><table class="table table-striped" > 
                            <thead>
                              <th>Ingreso</th>
                              <th>Sala</th>
                              <th>Camilla</th>
                              <th>Dui de Doctor</th>
                            </thead>
                            <tbody>
                              
                              @if(count($exp->ingreso)>0)
                              @foreach($exp->ingreso as $ci)

                                <tr>
                                <td>{{$ci->id}} </td>
                                <td>{{$ci->salas->numerosala}} </td>
                                <td>{{$ci->camillas->numerocamilla}} </td>
                                <td>{{$ci->doctores->personas['dui']}} </td>
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
    </div>
    </section><!-- /.content -->
@endsection

