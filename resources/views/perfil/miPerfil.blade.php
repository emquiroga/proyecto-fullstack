@extends('layouts.app')
@section('content')

<div class="container">
    <button class="icon-btn">
        <a href="{{ url()->previous() }}">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
            </svg>
        </a>
    </button>

    <div>
        <h3>Hola {{ $user->first_name }}</h3>
    </div>
    <div>
        <div>     
            <!-- <img src="storage/profile/{{$user->profile_picture}}" style="width: 9em; border-radius: 50%;"> -->
            <img src="{{ asset('storage').'/'.$user->profile_picture}}" style="width: 9em; border-radius: 50%;">
            <a href="#" id="update_image"><ion-icon name="camera-reverse" size="large" color="#333"></ion-icon></a>
            <div hidden id="form_update_image">
                <form enctype="multipart/form-data" action="{{ url('/perfil') }}" method="POST">
                    <label>Cambiar Imagen</label>
                    <input type="file" name="profile_picture" id="profile_picture">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn-sm">
                </form>
            </div>

        </div>        
    </div>
    <div>
        <p>Nombre: {{ $user->first_name }}</p>
        <p>Apellido: {{ $user->last_name }}</p>
        <p>Email: {{ $user->email }}</p>
        <a href="{{ url('/user/reset_password') }}" style="background: #7FD4FF; color:#fff ">Cambiar Contraseña</a>
    </div>
    <div>


        @if ($libros)
        <h5>Tus Libros</h5>
        @foreach($libros as $libro)
        <div>
            <a href="{{ url('libros/' . $libro->id) }}">
                <img src="{{ asset('storage').'/'.$libro->portada}}" style="width: 20%;">
                <p>{{ $libro->titulo }}</p>
            </a>
            <a href="{{ url('categoria'.'/'.$libro->categorias->id) }}">
                <p>{{ $libro->categorias->descripcion }}</p>
            </a>
            
        </div>
        @endforeach
        @else

        <p>No tienes libros publicados</p>

        @endif
    </div>

</div>

<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>

@endsection