@extends('layouts.app')

@section('content')
<div class="container">
<br>
    <div class="form-container">
        <form method="POST" action="{{ url('/reset_password') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-0">
                    <div class="col-md-6 offset-md-4 mb-2">
                        <button type="submit" class="blue-btn">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                 <div class="col-md-6 offset-md-4 mb-2 text-center">
                    <a class="blue-btn" href="{{ url('libros/') }}">Cancelar</a>
                 </div>
            </div>
         
           
        </form>
    </div>
</div>
@endsection