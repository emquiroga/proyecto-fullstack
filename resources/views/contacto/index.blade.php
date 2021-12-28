@extends('layouts.app')
@section('content')
    <div class="container max-650">
         @if(session()->has('mensaje'))
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
        @endif
        <div class="title-row">
            <h3 class="mb-3">{{$title}}</h3>
        </div>
        <form action="{{route('contacto.index')}}" method="POST">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
            <button type="submit" class="blue-btn">Enviar</button>
        </form>
    </div>
@endsection
