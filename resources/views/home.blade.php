@extends('layouts.app')

@section('title-page')
    Painel
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Seja Bem-vindo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li><a href="{{ url('indicacoes') }}">Indicações</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
