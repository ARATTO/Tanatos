@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('tntmessage.Tanatos') }}
@endsection


@section('main-content')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-info">
					<div class="panel-heading"></div>

					<div class="panel-body" style="background:#d4ffff;">
						<!-- 16:9 aspect ratio -->
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')
						<div class="row centered">
							<div class="col-lg-5">
							
							</div>
							<div class="col-lg-2">
								<img class="img-responsive" src="{{ asset('/img/tanatos/welcome/Logo.png') }}" alt="Tanatos">
								<h1><b style="color:red;">T</b>ANATOS</h1>
									<hr>
							</div>
							<div class="col-lg-5">

							</div>
						</div>
						
						<hr>
						<div class="row centered">
							<div class="col-lg-2">
								<h5><b>{{ trans('tntmessage.GeneralChequeo') }}</b></h5>
								<p>{{ trans('tntmessage.GeneralChequeo_Cuerpo') }}</p>
								<img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
							</div>
							<div class="col-lg-8">
								<img class="img-responsive" src="{{ asset('/img/tanatos/welcome/Banner_1.jpg') }}" alt="">
							</div>
							<div class="col-lg-2">
								<br>
								<img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
								<h5><b>{{ trans('tntmessage.AmpliaGama') }}</b></h5>
								<p>
									... certificados por <a href="#">OMS</a> 
									garantizamos tu salud y la calidad de nuestos 
									<a href="#"> medicamentos</a>.
									
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
