@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-container">
        <h2>Registro de Usuario</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row mb-3">
                <label for="first_name" class="col-md-4 col-form-label text-md-right"><span class="text-danger"><strong>*</strong></span> Nombre</label>

                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="last_name" class="col-md-4 col-form-label text-md-right"><span class="text-danger"><strong>*</strong></span> Apellido</label>

                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-right"><span class="text-danger"><strong>*</strong></span> Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-right"><span class="text-danger"><strong>*</strong></span> Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><span class="text-danger"><strong>*</strong></span> Confirma Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-3">
                    <button type="submit" class="blue-btn">
                        Registrarse
                    </button>
            </div>
            <div class="row mb-0">
                <a href="{{ route('login')}}" class="nav-link">
                    Volver
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
