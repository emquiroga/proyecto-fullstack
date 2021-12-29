@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-around">

        <div class="col-12">
            <div class="nombre_user">
                <h3>Hola, {{ $user->first_name }}!</h3>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4 user_info">
            <div class="contenedor_imagen_perfil">
                <img class="imagen_perfil" src="{{ asset('storage').'/'.$user->profile_picture}}">
                <div class="icono_update_image">
                    <a href="#" id="update_image">
                        <ion-icon name="camera-reverse" size="large"></ion-icon>
                    </a>
                </div>

            </div>
                <div hidden id="form_update_image">
                    <form class="form_imagen" enctype="multipart/form-data" action="{{ url('/perfil') }}" method="POST">
                        <label>Cambiar Imagen</label><br>
                        <div class="text-center">
                            <input type="file" name="profile_picture" id="profile_picture">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn-sm" value="Subir">
                        </div>
                    </form>
            </div>
          
        </div>
        <div class="col-sm-12 col-lg-4 mt-3">
            <div>
                <p>Nombre: {{ $user->first_name }}</p>
                <p>Apellido: {{ $user->last_name }}</p>
                <p>Email: {{ $user->email }}</p>
                <a href="{{ url('/user/reset_password') }}" class="link_cambio_password">Cambiar Contraseña</a>
            </div>
        </div>
    </div>

 

<!-- <div class="row libros_propios"> -->
<div class="row libros_propios">
        <hr>
        <br>
        @if (count($libros)>0)
        <h5 style="text-align: center;">Tus Libros</h5>
        <div class="slider">
        @foreach($libros as $libro)
        <div class="slide">
            <a href="{{ url('/libros/'.$libro->id) }}">
                <div class="libro_info">
                    <img class="libro_img" src="{{asset('storage').'/'.$libro->portada}}" alt="Portada Libro" alt="card-img">
                    <div class="libro">
                        <h5 class="title">{{ $libro->titulo }}</h5>
                        <div class="valoracion rating">
                            @for ($i = 0; $i < $libro->valoracion; $i++)
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                </svg>
                                @endfor
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @else
    <p>No tienes libros publicados</p>
    @endif
</div>

    <div class="agregar_libro_link">
        <div>
            <p>Agregar Libro</p>
        </div>
        <div>
            <a class="icon-btn" href="{{ url('/libros/create') }}">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                </svg>
            </a>
        </div>
    </div>
        



</div>

<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>

@endsection