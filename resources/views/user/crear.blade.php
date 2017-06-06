@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('tntmessage.Usuario') }}
@endsection
        
@section('main-content')
    @include('layouts.partials.contentheader.user.crear_head')
        <section class="content">
            <div class="container spark-screen">    
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">{{ trans('tntmessage.Usuario') }}</div>
                                <div class="panel-body">
                                    @include('layouts.partials.flash')

                                    {!! Form::open(['route' => 'users.store', 'method' => 'POST', 'files' => true]) !!}
                                        <div class="col-md-12 col-md-offset-1">
                                            <h3><span class="label label-primary">{{ trans('tntmessage.DatosGenerales') }}</span></h3>
                                                <div class="form-group form-inline">
                                                    {!! form::label('Nombres','Nombres') !!}
                                                    {!! form::text('primernombre', null, ['class' => 'form-control ', 'placeholder'=> 'Juan', 'required']) !!}
                                                    {!! form::text('segundonombre', null, ['class' => 'form-control ', 'placeholder'=> 'Jose', 'required']) !!}
                                                </div>
                                                <div class="form-group form-inline">
                                                    {!! form::label('Apellidos','Apellidos') !!}
                                                    {!! form::text('primerapellido', null, ['class' => 'form-control', 'placeholder'=> 'Garcia', 'required']) !!}
                                                    {!! form::text('segundoapellido', null, ['class' => 'form-control', 'placeholder'=> 'Hernandez', 'required']) !!}
                                                    <hr>
                                                </div>

                                            <div class="form-group form-inline">
                                                {!! form::label('FechaNacimiento','Fecha de Nacimiento') !!}
                                                <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                                    <input type="text" class="form-control datepicker" name="fechanacimiento">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="form-group form-inline">
                                                    {!! form::label('checkbox','Genero') !!}
                                                    <input type="checkbox" value="1" name="genero" id="checkboxGenero" class="form-control">
                                                    <hr>
                                            </div>
                                            
                                            <h3><span class="label label-primary">{{ trans('tntmessage.Direccion') }}</span></h3>
                                            <hr>
                                            <div class="form-group">
                                                {!! form::label('Direccion','Direccion') !!}
                                                {!! form::text('detalledireccion', null, ['class' => 'form-control', 'placeholder'=> 'Direccion de Usuario', 'required']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! form::label('Telefono','Telefono') !!}
                                                {!! form::text('telefono', null, ['class' => 'form-control', 'placeholder'=> '77777777', 'required']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! form::label('Telefono de Responsable','TelefonoRes') !!}
                                                {!! form::text('telefonoresponsable', null, ['class' => 'form-control', 'placeholder'=> '77777777', 'required']) !!}
                                            </div>
                                        
                                            <div class="form-group">
                                                {!! form::label('Correo','Correo') !!}
                                                {!! form::text('email', null, ['class' => 'form-control', 'placeholder'=> 'xxxx_xx@ues.com', 'required']) !!}
                                            </div>
                                            <div class="form-group">    
                                                    <h4><span for="chosen-select" class="label label-info">Seleccione Estado Civil.</span><h4>
                                                    @if($estadoCivil != null)
                                                        <select name="idestadocivil" id="chosen-select" data-placeholder="Seleccione estado civil a asignar...">
                                                            @foreach ($estadoCivil as $estadoC)
                                                                <option value="{{ $estadoC->id }}">{{$estadoC->nombreestadocivil}}</option>
                                                            @endforeach
                                                        </select>
                                                    @else
                                                        {!! form::label('#','No existen estados civiles en el Sistema') !!}
                                                    @endif    
                                            </div>
                                            <div class="form-group">    
                                                    <h4><span for="chosen-select" class="label label-info">Seleccione Rol.</span><h4>
                                                    @if($roles != null)
                                                        <select name="idrol" id="chosen-select_" data-placeholder="Seleccione Rol...">
                                                            @foreach ($roles as $rol)
                                                                <option value="{{ $rol->id }}">{{$rol->nombrerol}}</option>
                                                            @endforeach
                                                        </select>
                                                    @else
                                                        {!! form::label('#','No existen roles en el Sistema') !!}
                                                    @endif    
                                            </div>
                                            <hr>  
                                            <div class="form-group">
                                                <h5><span class="label label-danger">**Contraseña inicial es numero de telefono</span><h5>
                                            </div>  
                                            <button type="submit" class="btn btn-success btn-lg"> {{trans('tntmessage.Crear')}} </button>
                                        </div>
                                        
                                        
                                        
                                    {!! Form::close() !!}                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section><!-- /.content -->
@endsection