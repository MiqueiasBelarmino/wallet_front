@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
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

@section('css')
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop