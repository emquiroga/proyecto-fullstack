@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <hr>
    <br>
    <br> --}}
    <div class="alert alert-success" role="alert">
        Bienvenidos a nuestro proyecto!
    </div>
    <div class="col align-items-start">
        <div class="col alert alert-danger">
            <h1>Titulo del proyecto</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, qui animi. Sapiente quia saepe a placeat, quas unde magnam, voluptates dolor delectus, vitae mollitia esse ipsa iste architecto porro soluta!</p>
            <br>
            <h2>Integrantes del proyecto</h2>
            <ul>
                <li>Integrante</li>
                <li>Integrante</li>
                <li>Integrante</li>
                <li>Integrante</li>
                <li>Integrante</li>
            </ul>
        </div>
    </div>
</div>
@endsection
