@extends('layouts.template')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop


@section('content')
<div class="container-fluid">
    <input type="hidden" name="vencto" id="vencto" value="{{(isset($vencimento) && !empty($vencimento))? $vencimento: date('Y-m-d')}}">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center align-items-center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button onclick="changeDate('p')" class="btn btn-primary" type="button"><i class="fas fa-chevron-circle-left"></i></button>
                </div>
                <div id='date-filter' class="form-control d-flex justify-content-center"></div>
                <div class="input-group-append">
                    <button onclick="changeDate('n')" class="btn btn-primary" type="button"><i class="fas fa-chevron-circle-right"></i></button>
                </div>
            </div>
            <!-- <div class="date-picker d-flex justify-content-center align-items-center br-10">
                <div class="selected-date"></div>
                <div class="dates">
                    <div class="month">
                        <div class="arrows prev-mth">&lt;</div>
                        <div class="mth"></div>
                        <div class="arrows next-mth">&gt;</div>
                    </div>
                    <div class="days"></div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-4 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-arrow-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Receitas</span>
                    <span class="info-box-number">R$ {{$receitas['total']}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-4 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-arrow-down"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Despesas</span>
                    <span class="info-box-number">R$ {{$despesas['total']}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        @php
        $balance = $receitas['total'] - $despesas['total']
        @endphp
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-4 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon {{$balance <0?'bg-danger' : 'bg-success'}} elevation-1"><i class="fas fa-money-bill"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Balanço</span>
                    <span class="info-box-number">R$ {{$balance}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->


    <!-- <div class="row">
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
</div> -->
    @stop

    @section('css')
    @stop

    @section('js')
    <script>
        const month = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
        let currentMonth = new Date().getMonth();
        let currentYear = new Date().getFullYear();
        // localStorage.setItem("currentYear", 2021);

        document.addEventListener('DOMContentLoaded', () => {

            if (localStorage.getItem("currentMonth") != null) currentMonth = localStorage.getItem("currentMonth");
            if (localStorage.getItem("currentYear") != null) currentYear = localStorage.getItem("currentYear");

            if (localStorage.getItem('visited') == '0') {
                localStorage.setItem('visited', 1);
                
                currentMonth = new Date().getMonth();
                currentYear = new Date().getFullYear();

                localStorage.setItem("currentMonth", currentMonth);
                localStorage.setItem("currentYear", currentYear);
                // window.location.href = "{{ route('dashboard') }}/?vencimento=" + (currentYear + "-" + fmonth(currentMonth)) + "";
            }
            document.getElementById('date-filter').innerText = `${month[currentMonth]}/${currentYear}`;
        });

        function changeDate(order) {
            let dateFilter = document.getElementById('date-filter')
            if (order === 'p') {
                if (currentMonth > 0) {
                    currentMonth--;
                } else {
                    currentMonth = 11;
                    currentYear--;
                }
            } else if (order === 'n') {
                if (currentMonth < 11) {
                    currentMonth++;
                } else {
                    currentMonth = 0;
                    currentYear++;
                }
            }
            localStorage.setItem("currentMonth", currentMonth);
            localStorage.setItem("currentYear", currentYear);
            document.getElementById('date-filter').innerText = `${month[currentMonth]}/${currentYear}`;
            // window.location.href = "{{ route('dashboard') }}/?vencimento=;
            window.location.href = "{{ route('dashboard') }}/?vencimento=" + (currentYear + "-" + fmonth(currentMonth)) + "";
        }

        function fmonth(m) {
            let a = m;
            a++;
            if (a < 10)
                return "0" + a;
            return a;
        }
    </script>
    @stop