@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop


@section('content')
<div class="container-fluid">
    <input type="hidden" name="vencto" id="vencto" value="{{(isset($vencimento) && !empty($vencimento))? $vencimento: date('Y-m-d')}}">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center align-items-center">
            <div class="date-picker d-flex justify-content-center align-items-center br-10">
                <div class="selected-date"></div>
                <div class="dates">
                    <div class="month">
                        <div class="arrows prev-mth">&lt;</div>
                        <div class="mth"></div>
                        <div class="arrows next-mth">&gt;</div>
                    </div>
                    <div class="days"></div>
                </div>
            </div>
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
        const date_picker_element = document.querySelector('.date-picker');
        const selected_date_element = document.querySelector('.date-picker .selected-date');
        const dates_element = document.querySelector('.date-picker .dates');
        const mth_element = document.querySelector('.date-picker .dates .month .mth');
        const next_mth_element = document.querySelector('.date-picker .dates .month .next-mth');
        const prev_mth_element = document.querySelector('.date-picker .dates .month .prev-mth');
        const days_element = document.querySelector('.date-picker .dates .days');

        const months = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

        let date = new Date();
        let day = date.getDate();
        let month = date.getMonth();
        let year = date.getFullYear();

        let selectedDate = date;
        let selectedDay = day;
        let selectedMonth = month;
        let selectedYear = year;

        let input_date = document.getElementById("vencto");
        let date_aux = input_date !== null ? new Date(input_date.value) : "";

        mth_element.textContent = months[month] + ' ' + year;

        // selected_date_element.textContent = formatDate(date, 'dmy');
        selected_date_element.textContent = date_aux === "" ? formatDate(date, 'dmy') : formatDateAux(date_aux);
        selected_date_element.dataset.value = date_aux === "" ? selectedDate : date_aux;

        populateDates();

        // EVENT LISTENERS
        date_picker_element.addEventListener('click', toggleDatePicker);
        next_mth_element.addEventListener('click', goToNextMonth);
        prev_mth_element.addEventListener('click', goToPrevMonth);

        // FUNCTIONS
        function toggleDatePicker(e) {
            if (!checkEventPathForClass(e.path, 'dates')) {
                dates_element.classList.toggle('active');
            }
        }

        function goToNextMonth(e) {
            month++;
            if (month > 11) {
                month = 0;
                year++;
            }
            mth_element.textContent = months[month] + ' ' + year;
            populateDates();
        }

        function goToPrevMonth(e) {
            month--;
            if (month < 0) {
                month = 11;
                year--;
            }
            mth_element.textContent = months[month] + ' ' + year;
            populateDates();
        }

        function populateDates(e) {
            days_element.innerHTML = '';
            let amount_days = 31;

            if (month == 1) {
                amount_days = 28;
            }

            for (let i = 0; i < amount_days; i++) {
                const day_element = document.createElement('div');
                day_element.classList.add('day');
                day_element.textContent = i + 1;

                if (selectedDay == (i + 1) && selectedYear == year && selectedMonth == month) {
                    day_element.classList.add('selected');
                }

                day_element.addEventListener('click', function() {
                    selectedDate = new Date(year + '-' + (month + 1) + '-' + (i + 1));
                    selectedDay = (i + 1);
                    selectedMonth = month;
                    selectedYear = year;

                    selected_date_element.textContent = formatDate(selectedDate, 'dmy');
                    selected_date_element.dataset.value = selectedDate;

                    populateDates();
                    dates_element.classList.toggle('active');
                    window.location.href = "{{ route('dashboard') }}/?vencimento=" + formatDate(selectedDate, 'ymd');
                });

                days_element.appendChild(day_element);
            }
        }

        // HELPER FUNCTIONS
        function checkEventPathForClass(path, selector) {
            for (let i = 0; i < path.length; i++) {
                if (path[i].classList && path[i].classList.contains(selector)) {
                    return true;
                }
            }

            return false;
        }

        function formatDate(d, f) {
            let day = d.getDate();
            if (day < 10) {
                day = '0' + day;
            }

            let month = d.getMonth() + 1;
            if (month < 10) {
                month = '0' + month;
            }

            let year = d.getFullYear();
            if (f == 'dmy')
                return day + ' / ' + month + ' / ' + year;
            else
                return year + "-" + month + "-" + day;
        }

        function formatDateAux(d) {
            let day = d.getDate() + 1;
            if (day < 10) {
                day = '0' + day;
            }

            let month = d.getMonth() + 1;
            if (month < 10) {
                month = '0' + month;
            }

            let year = d.getFullYear();
            return day + ' / ' + month + ' / ' + year;
        }
    </script>
    @stop