@extends('layouts.master')

@section('title','Dashboard')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Wallet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Conta</a></li>
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 col-md-4 col-sm-12 mb-2">
            <div class="card card-stats bg-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-white mb-0">Receitas</h5>
                            <span class="h2 font-weight-bold mb-0">
                                <span class="text-white mr-2"><i class="fa fa-arrow-up"></i>&nbsp;R$&nbsp;{{$receitas['total']}}</span>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-4 col-sm-12 mb-2">
            <div class="card card-stats bg-danger">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-white mb-0">Despesas</h5>
                            <span class="h2 font-weight-bold mb-0">
                                <span class="text-white mr-2"><i class="fa fa-arrow-down"></i>&nbsp;R$&nbsp;{{$despesas['total']}}</span>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-12 mb-2">
            @php
            $balance = $receitas['total'] - $despesas['total']
            @endphp
            <div class="card card-stats {{$balance >0?'bg-success' : 'bg-danger'}}">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-white mb-0">Balanço</h5>
                            <span class="h2 font-weight-bold mb-0">
                                <span class="text-white mr-2"><i class="{{$balance >0?'fa fa-arrow-up' : 'fa fa-arrow-down'}}">
                                    </i>&nbsp;R$&nbsp;{{ $balance }}</span>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop