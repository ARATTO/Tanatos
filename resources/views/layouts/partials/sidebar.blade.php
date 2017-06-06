<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/tanatos/l_ejpg.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->usuario }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Busqueda Global..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            
            <!-- ////////////////////////////////////////////////// -->
            <!-- ///ADMINISTRADOR////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->
            @include('layouts.partials.nav.administrador')
            <!-- ////////////////////////////////////////////////// -->
            <!-- ///FIN ADMINISTRADOR////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->
     

            <!-- ////////////////////////////////////////////////// -->
            <!-- ///ENFERMERIA///////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->
            @include('layouts.partials.nav.enfermera')
            <!-- ////////////////////////////////////////////////// -->
            <!-- ///FIN ENFERMERIA///////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->


            <!-- ////////////////////////////////////////////////// -->
            <!-- ///MEDICO///////////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->
            @include('layouts.partials.nav.medico')  
            <!-- ////////////////////////////////////////////////// -->
            <!-- ///FIN MEDICO///////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->


            <!-- ////////////////////////////////////////////////// -->
            <!-- ///LABORATORISTA////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->
            @include('layouts.partials.nav.laboratorista')  
            <!-- ////////////////////////////////////////////////// -->
            <!-- ///FIN LABORATORISTA////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->


            <!-- ////////////////////////////////////////////////// -->
            <!-- ///FISIOTERAPIA/////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->
            @include('layouts.partials.nav.fisioterapeuta')  
            <!-- ////////////////////////////////////////////////// -->
            <!-- ///FIN FISIOTERAPIA/////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->


            <!-- ////////////////////////////////////////////////// -->
            <!-- ///PACIENTE/////////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->
            @include('layouts.partials.nav.paciente')  
            <!-- ////////////////////////////////////////////////// -->
            <!-- ///FIN PACIENTE/////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->


            <!-- ////////////////////////////////////////////////// -->
            <!-- ///RECEPCCIONISTA///////////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->
            @include('layouts.partials.nav.recepccionista')  
            <!-- ////////////////////////////////////////////////// -->
            <!-- ///FIN RECEPCCIONISTA///////////////////////////// -->
            <!-- ////////////////////////////////////////////////// -->


            <!-- ////////////////////////////////////////////////// -->
            <!-- //////////////////OTROS/////////////////// -->
            <!-- ////////////////////////////////////////////////// -->
            @include('layouts.partials.nav.otros')  
            <!-- ////////////////////////////////////////////////// -->
            <!-- ///FIN OTROS///////////////// -->
            <!-- ////////////////////////////////////////////////// -->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
