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
        <div class="col alert alert-success">
            <h3>Contacto</h3>
            <form action="">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre completo">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nombre@correo.com">
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Tu mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection
