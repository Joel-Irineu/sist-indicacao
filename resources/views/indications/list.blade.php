@extends('layouts.app')

@section('title-page')
    Lista de indicações
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex;  align-items: center; justify-content: space-between">
                    <h1>{{ __('Indicações') }}</h1>
                    <a class="btn btn-primary" href="{{ url('indicacoes/novo') }}"><i class="fa-solid fa-user-plus"></i> Nova indicação</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            {{-- <th scope="col">E-mail</th> --}}
                            <th scope="col">Cupom</th>
                            <th scope="col">Aceitou</th>
                            <th scope="col">Comprou</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($indications as $ind)
                            <tr>
                                <td>{{ $ind->name }}</td>
                                {{-- <td>{{ $ind->email }}</td> --}}
                                <td>{{ $ind->ticket }}</td>
                                <td>
                                    <i class="fa-solid fa-square-check {{ $ind->accept == false ? 'text-secondary' : 'text-success'}}" title="{{ $ind->accept == false ? 'Ainda não aceitou' : 'Aceitou o convite'}}"></i>
                                </td>
                                <td>
                                    <i class="fa-solid fa-square-check {{ $ind->accept == false ? 'text-secondary' : 'text-success'}}" title="{{ $ind->bought == false ? 'Ainda não comprou' : 'efetuou a compra'}}"></i>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
