<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{asset('vendor/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Wallet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                <!-- inicio treeview -->
                <li class="nav-item has-treeview">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-id-badge"></i>
                        <p>
                            Minha Conta
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="far fa-fw fa-circle"></i>
                                <p>Perfil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="far fa-fw fa-circle"></i>
                                <p>Sugestões</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- fim treeview -->

                <!-- inicio treeview -->
                <li class="nav-item has-treeview">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-calendar-check"></i>
                        <p>
                            Agenda
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="far fa-fw fa-circle"></i>
                                <p>Horários</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- fim treeview -->

                <!-- inicio treeview -->
                <li class="nav-item has-treeview">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-cut"></i>
                        <p>
                            Serviços
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="far fa-fw fa-circle"></i>
                                <p>Novo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="">
                                <i class="far fa-fw fa-circle"></i>
                                <p>Gerenciar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- fim treeview -->

                <!-- inicio treeview -->
                <li class="nav-item has-treeview">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-box"></i>
                        <p>
                            Produtos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="far fa-fw fa-circle"></i>
                                <p>Novo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="">
                                <i class="far fa-fw fa-circle"></i>
                                <p>Gerenciar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- fim treeview -->

                <!-- inicio treeview -->
                <li class="nav-item has-treeview">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-user"></i>
                        <p>
                            Colaborador
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="far fa-fw fa-circle"></i>
                                <p>Novo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="">
                                <i class="far fa-fw fa-circle"></i>
                                <p>Gerenciar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- fim treeview -->
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>