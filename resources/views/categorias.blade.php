@extends('layouts.app')
@section('content')
        <div class="container">

            @foreach($categorias as $categoria)


                <div>
                    <img  class="categoria_icons icons" src="{{ asset('storage') . '/' . $categoria->icono }}" alt="icon">
                    <a class='link ' href="{{ url('categoria/' . $categoria->id) }}">{{ $categoria->descripcion }}</a>
                </div>

            @endforeach

    </div>

@endsection