@extends('layouts.auth')

@section('htmlheader_title')
    Registro
@endsection

@section('content')
    
    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>T</b>ANATOS</a>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="register-box-body">
            <p class="login-box-msg">Registrarme como Paciente</p>
            <form action="{{ url('/register') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h3>
                        <span class="label label-primary">{{ trans('tntmessage.DatosGenerales') }}</span>
                    </h3>
                    <hr>
                    <div class="input-group has-info form-inline">
                        <span class="input-group-addon" id="primernombre">PrimerNombre</span>
                        <input type="text" name="primernombre" class="form-control" placeholder="Juan" required>
                                                    
                        <span class="input-group-addon" id="segundonombre">SegundoNombre</span>
                        <input type="text" name="segundonombre" class="form-control" placeholder="Jose" required>                                               
                    </div>
                    <hr>
                    <div class="input-group has-info form-inline">
                        <span class="input-group-addon" id="primerapellido">PrimerApellido</span>
                        <input type="text" name="primerapellido" class="form-control" placeholder="Garcia" required>
                                                    
                        <span class="input-group-addon" id="segundoapellido">SegundoApellido</span>
                        <input type="text" name="segundoapellido" class="form-control" placeholder="Hernandez" required>
                    </div>
                    <hr>
                    <div class="input-group has-warning form-inline">
                        <span class="input-group-addon" id="dui">DUI</span>
                        <input type="text" name="dui" class="form-control" placeholder="12345678" required>
                    </div>
                    <hr>
                    <div class="input-group has-info form-inline">
                        <span class="input-group-addon" id="fechanacimiento">Fecha de Nacimiento</span>
                        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                            <input type="text" class="form-control datepicker" name="fechanacimiento" required>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="input-group has-info form-inline">
                        <span class="input-group-addon" id="genero">Genero</span>
                        <input type="checkbox" value="1" name="genero" id="checkboxGenero" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group">    
                        <h4><span for="chosen-select" class="label label-info">Seleccione Estado Civil.</span><h4>
                            @if($estadoCivil != null)
                                <select name="idestadocivil" id="chosen-select_" data-placeholder="Seleccione estado civil a asignar...">
                                    @foreach ($estadoCivil as $estadoC)
                                        <option value="{{ $estadoC->id }}">{{$estadoC->nombreestadocivil}}</option>
                                    @endforeach
                                </select>
                            @else
                                <label>No existen estados civiles en el Sistema</label>
                            @endif  
                        <hr>  
                    </div>
                    <h3>
                       <span class="label label-primary">{{ trans('tntmessage.Direccion') }}</span>
                    </h3>
                    <hr>
                    <div class="form-group">
                        <h4><span for="chosen-select" class="label label-info">Seleccione Municipio.</span><h4>
                            @if($municipio != null)
                                <select class="form-inline" name="idmunicipio" id="chosen-select" data-placeholder="Seleccione municipio de residencia...">
                                    @foreach ($municipio as $mun)
                                        <option value="{{ $mun->id }}">{{$mun->nombremunicipio}}</option>
                                    @endforeach
                                </select>
                            @else
                                <label>No existen municipios en el Sistema</label>
                            @endif 
                    </div>
                    <hr>
                    <div class="input-group has-success form-inline">
                        <span class="input-group-addon" id="colonia">Colonia</span>
                        <input type="text" name="colonia" class="form-control" placeholder="Lourdes Colon III" required>
                    </div>
                    <hr>
                    <div class="input-group has-success form-inline">
                        <span class="input-group-addon" id="pasaje">Pasaje</span>
                        <input type="text" name="pasaje" class="form-control" placeholder="37A" required>

                        <span class="input-group-addon" id="calle">Calle</span>
                        <input type="text" name="calle" class="form-control" placeholder="Volcan" required>
                    </div>
                    <hr>
                    
                    <div class="input-group has-success form-inline">
                        <span class="input-group-addon" id="casa">Casa</span>
                        <input type="text" name="casa" class="form-control" placeholder="12-A" required>

                        <span class="input-group-addon" id="apartamento">Apartamento</span>
                        <input type="text" name="apartamento" class="form-control" placeholder="15-B" required>
                    </div>
                    <hr>
                                            
                    <h3>
                        <span class="label label-primary">{{ trans('tntmessage.Contacto') }}</span>
                    </h3>
                    <hr>
 
                    <div class="input-group has-warning form-inline">
                        <span class="input-group-addon" id="correo">Correo</span>
                        <input type="email" name="email" class="form-control" placeholder="xxxx_xx@ues.com" required>
                    </div>
                    <hr>
                    <div class="input-group has-warning form-inline">
                        <span class="input-group-addon" id="password">Contraseña</span>
                        <input type="password" name="password" class="form-control" placeholder="********" required>

                        <span class="input-group-addon" id="password_">Repetir Contraseña</span>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="********" required>
                    </div>
                    <hr>
                    
                    <h4>
                        <span class="label label-success">{{ trans('tntmessage.Telefono') }}</span>
                    </h4>

                    <div class="input-group has-success form-inline">
                        <span class="input-group-addon" id="casatelefono">Casa</span>
                        <input type="text" name="casatelefono" class="form-control bfh-phone" placeholder="2222222" required>

                        <span class="input-group-addon" id="trabajotelefono">Trabajo</span>
                        <input type="text" name="trabajotelefono" class="form-control bfh-phone" placeholder="2222222" required>

                        <span class="input-group-addon" id="celulartelefono">Celular</span>
                        <input type="text" name="celulartelefono" class="form-control bfh-phone" placeholder="77777777" required>
                    </div>
                    <hr>
                    
                    <div class="input-group has-success form-inline">
                        <span class="input-group-addon" id="casatelefono">Acepto los Terminos y Condiciones</span>
                        <input type="checkbox" value="1" name="terms" id="checkboxTerm" class="form-control" required>
                    </div>
                
                    <hr>
                    <div class="row">
                    
                    <div class="col-xs-5">
                        <div class="form-group">
                            <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal"> Ver Terminos y Condiciones</button>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-6 col-xs-push-1">
                        <button type="submit" class="btn btn-success btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button>
                    </div><!-- /.col -->
                </div> 
                                            
            </form>

            <a href="{{ url('/login') }}" class="text-center">{{ trans('adminlte_lang::message.membreship') }}</a>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    @include('layouts.partials.scripts_auth')

    @include('auth.terms')

  
    <!-- Include Plugin DatePicker -->
    <script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <!-- Include Plugin Checkbox https://vsn4ik.github.io/bootstrap-checkbox -->
    <script src="{{ asset('/plugins/checkbox/bootstrap-checkbox.min.js') }}"></script>
    <!-- Include Plugin CheckBox -->
    <script>
        $(function() {
                $('#checkboxGenero').checkboxpicker({
                    html: true,
                    offLabel: 'F',
                    onLabel: 'M'
                })
        });  
        $(function() {
                $('#checkboxTerm').checkboxpicker({
                    html: true,
                    offLabel: 'No',
                    onLabel: 'Si'
                })
        });      
    </script>

    <!-- Include Plugin Chosen para MultiSelect https://github.com/harvesthq/chosen-package -->
    <script src="{{ asset('/plugins/chosen/chosen.jquery.js') }}" type="text/javascript"></script>
    <!-- Include Plugin Chosen -->
    <script>
        // defaults
        $("#chosen-select").chosen({
                no_results_text: "Oops, No encontramos nada como:  ",
                width: "100%",
        });
        $("#chosen-select_").chosen({
                no_results_text: "Oops, No encontramos nada como:  ",
                width: "100%",
        });
    </script>
</body>

@endsection
