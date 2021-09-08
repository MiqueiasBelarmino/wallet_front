<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <!-- <a href="" class="nav-link">Home</a> -->
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <!-- <a href="#" class="nav-link">Contact</a> -->
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li> -->


        <li class="nav-item">
            <!-- <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a> -->
        </li>
        @if(Auth::check())
        <li class="nav-item">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span><i class="fas fa-plus"></i></span>
            </a>

            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <li class="user-header h-auto ">
                    <p class=" mt-0 "></p>
                    <a class="btn btn-default btn-flat float-right  btn-block " href="#" onclick="">
                        Receita
                    </a>
                    <a class="btn btn-default btn-flat float-right  btn-block " href="#" onclick="">
                        Sair
                    </a>
                </li>
                <li class="user-footer">
                    
                </li>
            </ul>
        </li>
        </li>

        <li class="nav-item">

            @php( $nomes = explode(' ', Auth::user()->name))
            @php( $first = array_shift($nomes) )
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span>{{$first}}</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <li class="user-header bg-primary h-auto ">
                    <p class=" mt-0 ">{{$first}}</p>
                </li>
                <li class="user-footer">
                    <a class="btn btn-default btn-flat float-right  btn-block " href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-power-off"></i>
                        Sair
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
        </li>
        @endif
    </ul>
</nav>