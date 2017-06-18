<!-- PLANTILLA ESTANDAR -->


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Crear Paciente')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Crear Paciente</li>
    </ol>
</section>