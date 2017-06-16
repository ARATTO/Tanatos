<!-- ////////////////////////////////////////////////// -->
<!-- ///MEDICO///////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->

<!-- MENU MEDICO -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>DOCTOR</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Inicio Menu Consulta -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Consulta</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('diagnostico.index') }}">Ver Citas</a></li>
                            <li><a href="{{ route('consulta.resultadosexamenes') }}">Resultados Examenes</a></li>
                        </ul>
                    </li>
                    <!-- FIN Menu Consulta -->
                      <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Ingresos</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('ingreso.index') }}">Ver Ingresos</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </li>
<!-- FIN MENU MEDICO -->

<!-- ////////////////////////////////////////////////// -->
<!-- ///FIN MEDICO///////////////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->