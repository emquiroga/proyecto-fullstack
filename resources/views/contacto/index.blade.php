@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Contacto View</h1>
        <h3>Contacto</h3>
        <form action="{{route('home')}}" method="POST">
            @csrf
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
@endsection
