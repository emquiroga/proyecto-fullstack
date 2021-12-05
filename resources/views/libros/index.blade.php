@extends('layouts.app')
@section('content')
    <div class="container">
    @if(Session::has('mensaje'))
        <div class="alert alert-warning" role="alert">
            {{Session::get('mensaje')}}
        </div>
    @endif
        <h3>{{$title}}</h3>
        <div class="container-fluid">
            <a href="{{ url('/libros/create') }}" class="btn btn-info">Ingresar Libro</a>
        </div>
        <hr>
        <div class="container">
            @foreach($libros as $libro)
            <a href="{{url('/libros/' . $libro->id) }}">
                <img class="img-fluid" src="{{ asset('storage') . '/' . $libro->portada }}" class="card-img-top" alt="...">
            </a>
            @endforeach
        </div>
    </div>
@endsection
