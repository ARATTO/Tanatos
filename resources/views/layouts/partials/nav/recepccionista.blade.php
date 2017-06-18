<!-- ////////////////////////////////////////////////// -->
<!-- ///RECEPCCIONISTA///////////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->

<!-- MENU RECEPCCIONISTA -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('tntmessage.Recepccionista') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">

                 <!-- Inicio Menu Crear cita -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Citas</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('calendar') }}">Crear cita</a></li>
                        </ul>
                    </li>
                <!-- Fin Menu cita -->

                <!--Menu realizar cobro -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Cobros</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('cobro.index') }}">Cobrar Servicios</a></li>
                        </ul>
                    </li>
                 <!-- Fin menu realizar cobro -->
                 
                 <!-- Inicio Menu Crear Paciente -->
                    <li class="treeview">
                        <a href="{{ route('users.paciente') }}"><i class='fa fa-link'></i> <span>{{ trans('tntmessage.CrearPaciente') }}</span></a>
                    </li>
                    <!-- Fin Menu Crear Paciente -->

                </ul>
            </li>
<!-- FIN MENU RECEPCCIONISTA -->

<!-- ////////////////////////////////////////////////// -->
<!-- ///FIN RECEPCCIONISTA///////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->