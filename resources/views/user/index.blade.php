@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('tntmessage.Usuario') }}
@endsection
        
@section('main-content')
    @include('layouts.partials.contentheader.user.index_head')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">    
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						{{ trans('tntmessage.Usuario') }}
						<a href="{{ route('users.create') }}">
						<button type="button" class="btn btn-success btn-xs pull-right">
							{{ trans('tntmessage.CrearUsuario') }}
						</button>
						</a>
					</div>
					<div class="panel-body">
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')
							<table id="TablaLista" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Genero</th>
                                        <th>Correo</th>
										<th>Nacimiento</th>
										<th>Rol</th>
										<th>Activo</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Genero</th>
                                        <th>Correo</th>
										<th>Nacimiento</th>
										<th>Rol</th>
										<th>Activo</th>
									</tr>
								</tfoot>
								<tbody>
									@foreach($users as $user)
										<tr>
											<td>{{$user->personas->primernombre}} {{$user->personas->segundonombre}}</td>
                                            <td>{{$user->personas->primerapellido}} {{$user->personas->segundoapellido}}</td>
                                            <td>{{$user->personas->genero}}</td>
											<td>{{$user->email}}</td>
                                            <td>{{$user->personas->fechanacimiento}}</td>
                                            <td>{{$user->roles->nombrerol}}</td>
											<td>
											@if( Auth::user()->id == $user->id )
												<a href="#" class="btn btn-info btn-block" title="Eres tú, no puedes darte de baja.">
													<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
												</a>
											@else
												@if($user->estado == 1)
													<a 	href=" {{ route('users.inactivar' , $user->id) }} " 
														title="Desactivar Usuario: {{$user->personas->primernombre}} {{$user->personas->primerapellido}}" 
														class="btn btn-danger btn-block" 
														onclick="return confirm('¿Desactivar a {{$user->personas->primernombre}} ?')"
													>
														<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
													</a>
												@else
													<a 	href=" {{ route('users.activar' , $user->id) }} " 
														title="Activar Usuario: {{$user->personas->primernombre}} {{$user->personas->primerapellido}}" 
														class="btn btn-success btn-block" 
														onclick="return confirm('¿Activar a {{$user->personas->primernombre}} ?')"
													>
														<span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
													</a>
												@endif
											@endif
											</td>
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
