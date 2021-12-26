@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-container absolute-mid">
        <h1>Iniciar Sesión</h1>
        <span class="user-icon">
            <svg xmlns="http://www.w3.org/2000/svg"  fill="#7879F1" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg>
        </span>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                <input placeholder="Ingresa tu email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                <input placeholder="Ingresa tu contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row mb-3">
                    <button type="submit" class="blue-btn">
                        {{ __('Login') }}
                    </button>
            </div>

        </form>
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">
                    Registrarse
                </a>
            @endif
            <hr/>
            @if (Route::has('password.request'))
                <a class="nav-link" href="{{ route('password.request') }}">
                    Olvidé mi contraseña
                </a>
            @endif
    </div>
</div>
@endsection
