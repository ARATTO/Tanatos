@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('eetntmessage.Expedientes') }}
@endsection


@section('main-content')
	@include('layouts.partials.contentheader.generic_head',array('contentheader_title' => trans('eetntmessage.Expedientes')))
	
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading"  >{{ trans('eetntmessage.Expedientes') }}
				
					<!-- Trigger the modal with a button -->
                    <a href="{{route('expediente.create')}}">
					    <button  style=" float:right;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">{{ trans('eetntmessage.NuevoExpediente') }}</button>
                    </a>    
                    </div>
					
					<div class="panel-body">
						<!-- 16:9 aspect ratio -->
						@include('bones-flash::bones.flash')
						<meta name="csrf-token" content="<?php echo csrf_token() ?>"> 


                        <!--              TABLE              -->
                        <table class="table table-striped table-hover">
						    <thead>
						      <tr>						      	
						        <th># {{ trans('eetntmessage.Expediente') }}</th>			
						        <th>{{ trans('eetntmessage.Nombre') }}</th>
                                <th>{{ trans('eetntmessage.Genero') }}</th>
						        <th>{{ trans('eetntmessage.Telefono') }}</th>						        
                                <th>{{ trans('eetntmessage.Hospital') }}</th> 
                                

						        @if (Auth::guest())
					            @else
                                    @if(Auth::user()->idrol == 1)
                                        <th>Opciones</th>
                                    @endif
						        @endif
						      </tr>
						    </thead>
						    <tbody>
						   
                            @foreach($expedientes as $expediente)
						      <tr >
						  		<td>{{$id = $expediente->id}}</td>
						  		<td>
                                    {{$expediente->personas->primernombre}} 
                                    {{$expediente->personas->segundonombre}} 
                                    {{$expediente->personas->tercernombre}} 
                                    {{$expediente->personas->primerapellido}} 
                                    {{$expediente->personas->segundoapellido}}
                                </td>
                                <td>{{$expediente->personas->genero}}</td>
                                <td>
                                    Casa:{{$expediente->personas->telefonos->casatelefono}} </br>
                                    Trabajo:{{$expediente->personas->telefonos->trabajotelefono}}</br>
                                    Celular:{{$expediente->personas->telefonos->celulartelefono}}                                
                                </td>
                                <td>{{$expediente->hospitales->nombre}}</td>
                                <td> 
                                    <a href="{{route('expediente.show',$expediente)}}">
                                        <button type="button" class="btn btn-success" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-warning" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </td>
						      </tr>
						     @endforeach


						    </tbody>
						  </table>

                          
                        <!--              END TABLE            -->
                        
                        <div style=" float:right;">{!! $expedientes->appends(Request::all())->render() !!}</div>
					</div>
				</div>
			</div>
		</div>
        
	</div>
	</section><!-- /.content -->
	
@endsection

