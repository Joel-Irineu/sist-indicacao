@extends('layouts.app')

@section('title-page')
    Nova Indicação
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ __('Nova Indicação') }}</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
                        <div class="form-group">
                          <label for="name">Nome:</label>
                          <input type="text" name="name" class="form-control" placeholder="Nome do amigo indicado">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de e-mail</label>
                            <input type="email" name="email" class="form-control"  placeholder="E-mail do amigo indicado">
                          </div>
                          <br>
                        <button type="submit" class="btn btn-primary">Criar convite</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
