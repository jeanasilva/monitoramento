@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dados') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado (a) como:') }} {{ Auth::user()->name}}
                    <hr>
                    <span>E-mail:</span> {{ Auth::user()->email}}
                </div>
            </div>
        </div>
    </div>
        <br>
            <div class="container">

            <div class="row justify-content-center">

<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>IP</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Uptime</th>
            <!-- <th class="text-right">Uptime</th> -->
            <th class="text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">1</td>
            <td>5.89.9.36</td>
            <td>Servidor VPS</td>
            <td>Ativo</td>
            <td>99,9%</td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" class="btn btn-round btn-info btn-sm">
                    <i class="material-icons">person</i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-round btn-success btn-sm">
                    <i class="material-icons">edit</i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-round btn-danger btn-sm">
                    <i class="material-icons">close</i>
                </button>
            </td>
        </tr>
    </tbody>
</table>

            </div>

        </div>
</div>
@endsection
