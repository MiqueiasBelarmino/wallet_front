@extends('layouts.master')

@section('title','Dashboard')

@section('content')
<div class="container-fluid">
    <h1>Dashboard</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6 col-sm-12 m-2">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Entradas</h5>
                            <span class="h2 font-weight-bold mb-0">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>&nbsp;R$&nbsp;{{$receitas['total']}}</span>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>%</span>
                        <span class="text-nowrap">some text</span>
                    </p> -->
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-sm-12 m-2">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Despesas</h5>
                            <span class="h2 font-weight-bold mb-0">
                                <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i>&nbsp;R$&nbsp;{{$despesas['total']}}</span>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="mt-3 mb-0 text-sm">
                        <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i>%</span>
                        <span class="text-nowrap">some text</span>
                    </p> -->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-12 m-2">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Balanço</h5>
                            <span class="h2 font-weight-bold mb-0">
                            @php
                            $balance = $receitas['total'] - $despesas['total'] 
                            @endphp
                                <span class="{{$balance >0?'text-success' : 'text-danger'}} mr-2"><i class="{{$balance >0?'fa fa-arrow-up' : 'fa fa-arrow-down'}}">
                                </i>&nbsp;R$&nbsp;{{ $balance }}</span>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="mt-3 mb-0 text-sm">
                        <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i>%</span>
                        <span class="text-nowrap">some text</span>
                    </p> -->
                </div>
            </div>
        </div>

    </div>
</div>
@stop