@extends('layouts.app')

@section('titulo')
InfoFlix - Cadastrar
@endsection

@section('content')
<div class="container conteudo">
    <h2 class="text-center mb-3">Cadastro</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row justify-content-center">
            <label for="name" class="col-md-1 col-form-label text-md-right">Nome</label>

            <div class="col-md-6">
                <input id="name" type="text" maxlength="60" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="email" class="col-md-1 col-form-label text-md-right">E-mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="password" class="col-md-1 col-form-label text-md-right">Senha</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="password-confirm"
                class="col-md-1 col-form-label text-md-right">Confirmar Senha</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row justify-content-center mb-0">
            <div class="col-md-56offset-md-4">
                <button type="submit" id="btn-adicionar" class="btn btn-dark btn-lg">
                    Cadastrar
                </button>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
