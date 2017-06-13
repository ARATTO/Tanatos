{!! Form::open(['route' => 'users.store', 'method' => 'POST', 'files' => true]) !!}
                                        <div class="col-md-12 ">
                                            <h3>
                                                <span class="label label-primary">{{ trans('tntmessage.DatosGenerales') }}</span>
                                            </h3>
                                            <hr>
                                                <div class="input-group has-info form-inline">
                                                        <span class="input-group-addon" id="primernombre">PrimerNombre</span>
                                                        {!! form::text('primernombre', null, ['class' => 'form-control ', 'placeholder'=> 'Juan', 'required']) !!}
                                                    
                                                        <span class="input-group-addon" id="segundonombre">SegundoNombre</span>
                                                        {!! form::text('segundonombre', null, ['class' => 'form-control ', 'placeholder'=> 'Jose', 'required']) !!}                                                    
                                                </div>
                                                <hr>
                                                <div class="input-group has-info form-inline">
                                                        <span class="input-group-addon" id="primerapellido">PrimerApellido</span>
                                                        {!! form::text('primerapellido', null, ['class' => 'form-control', 'placeholder'=> 'Garcia', 'required']) !!}
                                                    
                                                        <span class="input-group-addon" id="segundoapellido">SegundoApellido</span>
                                                        {!! form::text('segundoapellido', null, ['class' => 'form-control', 'placeholder'=> 'Hernandez', 'required']) !!}
                                                </div>
                                                <hr>
                                                
                                            <div class="input-group has-warning form-inline">
                                                <span class="input-group-addon" id="dui">DUI</span>
                                                {!! form::text('dui', null, ['class' => 'form-control', 'placeholder'=> '12345678', 'required']) !!}
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
                                                        {!! form::label('#','No existen estados civiles en el Sistema') !!}
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
                                                            <hr>
                                                        @else
                                                            {!! form::label('#','No existen municipios en el Sistema') !!}
                                                        @endif 
                                            </div>
                                            <div class="input-group has-success form-inline">
                                                <span class="input-group-addon" id="colonia">Colonia</span>
                                                {!! form::text('colonia', null, ['class' => 'form-control', 'placeholder'=> 'Lourdes Colon III', 'required', 'aria-describedby' => 'colonia']) !!}
                                            </div>
                                            <hr>
                                            <div class="input-group has-success form-inline">
                                                <span class="input-group-addon" id="pasaje">Pasaje</span>
                                                {!! form::text('pasaje', null, ['class' => 'form-control', 'placeholder'=> '37A', 'required', 'aria-describedby' => 'pasaje']) !!}

                                                <span class="input-group-addon" id="calle">Calle</span>
                                                {!! form::text('calle', null, ['class' => 'form-control', 'placeholder'=> 'Volcan', 'required', 'aria-describedby' => 'calle']) !!}
                                            </div>
                                            <hr>
                                            
                                            <div class="input-group has-success form-inline">
                                                <span class="input-group-addon" id="casa">Casa</span>
                                                {!! form::text('casa', null, ['class' => 'form-control', 'placeholder'=> '12-A', 'aria-describedby' => 'casa']) !!}

                                                <span class="input-group-addon" id="apartamento">Apartamento</span>
                                                {!! form::text('apartamento', null, ['class' => 'form-control', 'placeholder'=> '15-B', 'aria-describedby' => 'apartamento']) !!}
                                            </div>
                                            <hr>
                                            
                                            <h3>
                                                <span class="label label-primary">{{ trans('tntmessage.Contacto') }}</span>
                                            </h3>
                                            <hr>
 
                                            <div class="input-group has-warning form-inline">
                                                <span class="input-group-addon" id="correo">Correo</span>
                                                {!! form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'xxxx_xx@ues.com', 'required', 'aria-describedby' => 'correo']) !!}
                                            </div>
                                            <hr>

                                            <h4>
                                                <span class="label label-success">{{ trans('tntmessage.Telefono') }}</span>
                                            </h4>

                                            <div class="input-group has-warning form-inline">
                                                <span class="input-group-addon" id="casatelefono">Casa</span>
                                                {!! form::text('casatelefono', null, ['class' => 'form-control bfh-phone', 'placeholder'=> '2222222' ]) !!}

                                                <span class="input-group-addon" id="trabajotelefono">Trabajo</span>
                                                {!! form::text('trabajotelefono', null, ['class' => 'form-control', 'placeholder'=> '2222222']) !!}

                                                <span class="input-group-addon" id="celulartelefono">Celular</span>
                                                {!! form::text('celulartelefono', null, ['class' => 'form-control', 'placeholder'=> '77777777', 'required']) !!}
                                            </div>
                                           
                                            <hr>  
                                            <div class="form-group form-inline">
                                                
                                                <button type="submit" class="btn btn-success btn-lg"> {{trans('tntmessage.Crear')}} </button>
                                            </div>  
                                            
                                        </div>
                                        
                                        
                                        
                                    {!! Form::close() !!}  