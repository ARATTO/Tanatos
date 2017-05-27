@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('tntmessage.Inicio') }}
@endsection


@section('main-content')
	@include('layouts.partials.contentheader.home_head')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">{{ trans('tntmessage.Inicio') }}</div>

					<div class="panel-body">
						<!-- 16:9 aspect ratio -->
						@include('bones-flash::bones.flash')
						@include('layouts.partials.flash')
						
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection
