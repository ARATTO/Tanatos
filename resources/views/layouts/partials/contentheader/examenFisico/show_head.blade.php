<!-- PLANTILLA ESTANDAR -->


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Responder Examen Fisico')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> {{ trans('tntmessage.Home') }}</a></li>
        <li><a href="{{ route('examenesFisicos.index') }}"> {{ trans('tntmessage.ExamenesFisicos') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>