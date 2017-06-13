@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('eetntmessage.Expedientes') }}
@endsection


@section('main-content')
	@include('layouts.partials.contentheader.generic_head',array('contentheader_title' => trans('eetntmessage.NuevoExpediente')))
	
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading"  >{{ trans('eetntmessage.NuevoExpediente') }}
				
					<!-- Trigger the modal with a button 
                    <a href="{{route('expediente.create')}}">
					    <button  style=" float:right;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">{{ trans('eetntmessage.NuevoExpediente') }}</button>
                    </a>    
                    -->
                    </div>
					
					<div class="panel-body">
						<!-- 16:9 aspect ratio -->
						@include('bones-flash::bones.flash')
						
                        <!--                     FORM                        -->
                        
                        {!! Form::open(['route' => 'expediente.store']) !!}
                        <div class="col-md-12 ">
                            <div class="input-group has-warning form-inline">
                                <span class="input-group-addon" id="dui">DUI</span>
                                {!! form::text('dui', null, ['class' => 'form-control', 'placeholder'=> '12345678', 'required']) !!}
                            </div>
                            <hr>

                            <h3>
                                <span class="label label-primary">{{ trans('eetntmessage.HistorialClinico') }}</span>
                            </h3>
                            <hr>

                            <div class="input-group has-info form-inline">
                                    <span class="input-group-addon" id="primernombre">{{ trans('eetntmessage.NombreMadre') }}</span>
                                    {!! form::text('nombremadre', null, ['class' => 'form-control ', 'placeholder'=> 'Andra Abigail Letona de Araya', 'required']) !!}
                                                                                    
                            </div>
                            <br>
                            <div class="input-group has-info form-inline">
                                    <span class="input-group-addon" id="primerapellido">{{ trans('eetntmessage.NombrePadre') }}</span>
                                    {!! form::text('nombrepadre', null, ['class' => 'form-control', 'placeholder'=> 'Dario Roman Araya Motto', 'required']) !!}  
                                
                            </div>
                            <br>
                            <div class="input-group has-info form-inline">
                                    <span class="input-group-addon" id="primerapellido">{{ trans('eetntmessage.Antecedentes') }}</span>
                                    {!! form::textarea('antesedentes', null, ['class' => 'form-control', 'placeholder'=> trans('eetntmessage.TresPuntos'), 'required']) !!}  
                                
                            </div>                           
                            <hr>
                            
                            <h3>
                                <span class="label label-primary">{{ trans('eetntmessage.Hospital') }}</span>
                            </h3>
                            <br>
                            <div class="form-group">  
                                @if($hospitales != null)
                                    <select class="form-inline" name="idhospital" id="chosen-select" data-placeholder="{{trans('eetntmessage.SeleccioneHospital')}}">
                                        @foreach ($hospitales as $hospital)
                                            <option value="{{ $hospital->id }}">{{$hospital->nombre}}</option>
                                        @endforeach
                                    </select>
                                    
                                @else
                                    {!! form::label('#','No existen municipios en el Sistema') !!}
                                @endif 
                            </div>
                            <hr>
                            
                            
                            <div class="form-group form-inline">
                                
                                <button type="submit" class="btn btn-success btn-lg"> {{trans('tntmessage.Crear')}} </button>
                            </div>  
                        </div>
                                            
                        {!! Form::close() !!}  
                        <!--                    END FORM                      -->                        
					</div>
				</div>
			</div>
		</div>
        
	</div>
	</section><!-- /.content -->
	
@endsection
