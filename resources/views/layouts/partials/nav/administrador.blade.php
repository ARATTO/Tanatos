<!-- ////////////////////////////////////////////////// -->
<!-- ///ADMINISTRADOR////////////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->

<!-- MENU ADMINISTRADOR -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('tntmessage.Admin') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Inicio Menu Usuario -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>{{ trans('tntmessage.Usuario') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('users.index') }}">{{ trans('tntmessage.VerUsuario') }}</a></li>
                            <li><a href="{{ route('users.create') }}">{{ trans('tntmessage.CrearUsuario') }}</a></li>
                        </ul>
                    </li>
                    <!-- Fin Menu Usuario -->

                    <!-- Inicio Menu Medicamentos -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Medicamentos</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('medicamentos.index')}}">Ver medicamentos</a></li>
                            <li><a href="{{route('medicamentos.create')}}">Ingresar medicamento</a></li>
                        </ul>
                    </li>
                    <!-- Fin Menu Medicamentos -->

                    <!-- Inicio Menu Expediente -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Expediente</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('expediente.index')}}">Ver Expediente</a></li>
                            <li><a href="{{route('expediente.create')}}">Crear expediente</a></li>
                         
                        </ul>
                    </li>
                    <!-- Fin Menu Expediente -->


                    <!-- Inicio Menu Doctor -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Doctores</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('doctores.index')}}">Ver Doctores</a></li>
                            <li><a href="{{route('doctores.create')}}">Ingresar Nuevo Doctor</a></li>
                         
                        </ul>
                    </li>
                    <!-- Fin Menu Doctor -->
                </ul>
            </li>
<!-- FIN MENU ADMINISTRADOR -->

<!-- ////////////////////////////////////////////////// -->
<!-- ///FIN ADMINISTRADOR////////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->