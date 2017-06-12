<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'EXAMENES PENDIENTES A REALIZAR')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active"> {{ trans('lobotntmessage.EXAMENESPENDIENTES') }}</li>
    </ol>
</section>