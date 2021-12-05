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
            <div class="row">
                @foreach($libros as $libro)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('storage').'/'.$libro->portada}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$libro->titulo}}</h5>
                            <p class="card-text">{{$libro->descripcion}}</p>
                            <a href="{{ url('/libros/'.$libro->id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ url('/libros/'.$libro->id.'/edit') }}" class="btn btn-warning">Editar</a>
                            <form action="{{ url('/libros/'.$libro->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
