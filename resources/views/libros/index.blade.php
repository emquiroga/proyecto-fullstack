@extends('layouts.app')
@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-warning" role="alert">
        {{Session::get('mensaje')}}
    </div>
    @endif
    <div class="title-row mt-0">
        <h3>Agregar un Libro</h3>
        <button class="icon-btn">
            <a href="{{ url('/libros/create') }}">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                </svg>
            </a>
        </button>
    </div>
    <div class="books-container mt-3">
        @foreach($libros as $libro)
        <div class="card-container" data-aos="fade-up">
            <div class="card_libro_control">
                <a href="{{ url('/libros/'.$libro->id) }}">
                    <div class="img_card_control">
                        <img class="card-img-top" src="{{asset('storage').'/'.$libro->portada}}" alt="Portada libro">
                    </div>
                    <p>{{ \Illuminate\Support\Str::limit($libro->titulo, 25, $end='...') }}</p>
                </a>
            </div>

            <div class="rating">
                @for ($i = 0; $i < $libro->valoracion; $i++)
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                    </svg>
                    @endfor
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection