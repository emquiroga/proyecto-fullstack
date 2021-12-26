@extends('layouts.app')
@section('content')

<div class="container">

    <div>
            <h3>Hola {{ $user->first_name }}</h3>
    </div>
    <div>
        <img src="{{ asset('storage').'/'.$user->profile_picture}}" style="width: 10%;">
    </div>
    <div>
        <p>Nombre: {{ $user->first_name }}</p>
        <p>Apellido: {{ $user->last_name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Contraseña: *******************</p>
    </div>
    <div>
        
          
        @if ($libros) 
            <h5>Tus Libros</h5>
            @foreach($libros as $libro)
                <div>
                    <img src="{{ asset('storage').'/'.$libro->portada}}" style="width: 20%;">
                    <a href="{{ url('libros/' . $libro->id) }}"><p>{{ $libro->titulo }}</p></a>
                    <p>{{ $libro->categorias->descripcion }}</p>
                </div>
            @endforeach
        @else

            <p>No tienes libros publicados</p>

        @endif
    </div>

</div>

@endsection
