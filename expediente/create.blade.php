@extends('layouts.app')

@section('htmlheader_title')
 Creacion de Expediente
@endsection


@section('main-content')
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height:2000px !important;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Expediente
            <small> nuevo</small>
          </h1>
          <ol class="breadcrumb">
            
            <li class="active">Nuevo</li>
          </ol>

        </section>

        <!--     -->

        <!-- contenido principal -->
        <section class="content"  id="contenido_principal">

          <div class="box box-primary">

            <div class="box-body">

              <div class="col-xs-12">
                <div class="panel panel-info">
                  <!-- Default panel contents -->
                  <div class="panel-heading">Formulario Nuevo Expediente</div>
                  </div>

                  <!-- Aqui se mostrara el mensaje -->
                   @include('flash::message')
	

              </div>

          </div>

          <div class="panel-body">
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


            <div class="form-group">
                <label for="nombres">Nombre de la madre:</label>
                <div>
                  <input type="text" name="nombremadre" id="nombre" value=""  style="width: 300px;">
                </div>
            </div>

            <div class="form-group">
                <label for="nombres">Nombres del padre:</label>
                <div>
                  <input type="text" name="nombrepadre" id="nombre" value="" style="width: 300px;">
                </div>
            </div>

            <div class="form-group">
                <label for="nombres">Antecedente clinico:</label>
                <div>
                  <textarea type="text" name="antecedentes" id="nombre" value="" style="width: 300px;">
                  
                  </textarea>
                </div>
            </div>

            
            <div class="panel-body" disabled="false">
            {!! Form::submit('Guardar', ['class'=> 'btn-primary' ]) !!}  
              </div>
            

          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

          {!! Form::close()!!}

      </div>

         </div>
       </section>
@endsection
