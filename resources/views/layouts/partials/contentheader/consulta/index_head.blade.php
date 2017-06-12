<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'CITAS PARA EL DIA DE HOY')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active"> {{ trans('lobotntmessage.CITASPARAHOY') }}</li>
    </ol>
</section>