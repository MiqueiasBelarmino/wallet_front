@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Despesa</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Novo Serviço</h1>
        </div>
    </div>
</div><!-- /.container-fluid -->
<div class="container-fluid">
    <div class="container-fluid">
        @if (Session::get('success'))
        <div class=" col-md-10 alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        @if (Session::get('error'))
        <div class=" col-md-10 alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12">
                        <b>*</b>&nbsp;Campos obrigatórios
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('administrador.servico.novo.submit') }}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="nome">* Nome:</label>
                                <input type="text" value="{{ old('nome') }}" name="nome" id="nome" class="form-control" placeholder="Nome do serviço">
                                @if ($errors->has('nome'))
                                <div class="bg-danger rounded-1 p-1">
                                    {{ $errors->first('nome') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="valor">* Valor (R$):</label>
                                <input type="text" value="{{ old('valor') }}" name="valor" id="valor" onkeydown="return numericDecimal(event.key);" class="form-control">
                                @if ($errors->has('valor'))
                                <div class="bg-danger rounded-1 p-1">
                                    {{ $errors->first('valor') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="tempo">* Tempo (minutos):</label>
                                <input type="text" value="{{ old('tempo') }}" name="tempo" id="tempo" onkeydown="return onlyNumbers(event.key);" class="form-control">
                                @if ($errors->has('tempo'))
                                <div class="bg-danger rounded-1 p-1">
                                    {{ $errors->first('tempo') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="status">* Situação:</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="ativo">Ativo</option>
                                    <option value="inativo">Inativo</option>
                                </select>
                                @if ($errors->has('status'))
                                <div class="bg-danger rounded-1 p-1">
                                    {{ $errors->first('status') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="descricao">Descrição:</label>
                                <textarea class="form-control" name="descricao" id="descricao" rows="3">{{ old('descricao') }}</textarea>
                                @if ($errors->has('descricao'))
                                <div class="bg-danger rounded-1 p-1">
                                    {{ $errors->first('descricao') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')

<script type="text/javascript">
    $(function() {
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });

    const KEYS = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'Backspace', '.', ','];
    const numericDecimal = (key) => {
        if ($.inArray(key, KEYS) > -1)
            return true;
        return false;
    };

    const onlyNumbers = (key) => {
        if ($.inArray(key, ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'Backspace']) > -1)
            return true;
        return false;
    };
</script>
@stop