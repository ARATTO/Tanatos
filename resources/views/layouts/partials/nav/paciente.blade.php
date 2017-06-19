<!-- ////////////////////////////////////////////////// -->
<!-- ///PACIENTE/////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->

<!-- MENU PACIENTE -->
<li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>PACIENTE</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Inicio Menu Consulta -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Informacion</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            
                            
                            <li><a href="{{ route('consulta.citasdelpaciente') }}">Mis Examenes</a></li>
                            
                        </ul>
                    </li>
                    <!-- Fin Menu Consulta -->
                    <!-- Inicio Menu Crear cita -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Citas</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('calendar') }}">Crear cita</a></li>
                        </ul>
                    </li>
                    <!-- Fin Menu cita -->
                </ul>
            </li>
<!-- FIN MENU PACIENTE -->

<!-- ////////////////////////////////////////////////// -->
<!-- ///FIN PACIENTE/////////////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->