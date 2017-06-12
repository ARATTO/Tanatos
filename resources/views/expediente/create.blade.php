
<!-- PLANTILLA ESTANDAR -->


@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
  INICIO
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
  @include('layouts.partials.contentheader.expediente.create_head')
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
            {!! Form::open(['action' => 'expedienteController@store']) !!}
        
                      <div class="col-xs-6">
                        <div class="input-group col-md-12">
                          <div class="form-group">
                              {!! Form::label('usuarios', 'Seleccione el usuario') !!}
                              {!! form::select('id', $usuarios, null, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione un usuario', 'required', 'id'=>'id']) !!}
                          </div>

                          <div class="form-group">
                              {!! Form::label('hospitales', 'Seleccione el hospital') !!}
                              {!! form::select('idhospitales', $hospitales, null, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione un hospital', 'required', 'id'=>'id']) !!}
                          </div>
                          
                          <div class="form-group form-inline">
                              {!! form::label('Nombres','Nombre de la madre') !!}
                              {!! form::text('nombremadre', null, ['class' => 'form-control ', 'placeholder'=> 'Maria', 'required']) !!}
                          </div>

                          
                          <div class="form-group form-inline">
                              {!! form::label('Nombres','Nombre del padre') !!}
                              {!! form::text('nombrepadre', null, ['class' => 'form-control ', 'placeholder'=> 'Pedro', 'required']) !!}
                          </div>

                          <div class="form-group">
                              {!! form::label('Nombres','Antecedente clinico') !!}
                              <textarea rows="4" cols="50" class="form-control" name="antecedentes" maxlength="65530"></textarea>
                          </div>

                          
                          <div class="panel-body" disabled="false">
                          {!! Form::submit('Guardar', ['class'=> 'btn-primary' ]) !!}  
                            </div>
                          

                        </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                        {!! Form::close()!!}
          </div>
        </div>
      </div>
    </div>
  </div>
  </section><!-- /.content -->
@endsection


