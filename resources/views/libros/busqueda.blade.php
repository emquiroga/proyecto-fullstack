@extends('layouts.app')
@section('content')
    <div class="container">
    <button class="icon-btn">
                        <a href="{{ url()->previous() }}">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg>
                        </a>
    </button>
    @if(Session::has('mensaje'))
        <div class="alert alert-warning" role="alert">
            {{Session::get('mensaje')}}
        </div>
    @endif
        <div>
            </div>
            <div class="books-container mt-3">
            <h4>{{$title}}</h4>
                @if(count($libros)>0)
                    @foreach($libros as $libro)
                    <div class="card-container">
                        <a href="{{ url('/libros/'.$libro->id) }}">
                            <img class="card-img-top" src="{{asset('storage').'/'.$libro->portada}}" alt="Portada libro">
                            <p>{{$libro->titulo}}</p>
                        </a>
                        <div class="rating">
                            @for ($i = 0; $i < $libro->valoracion; $i++)
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                            @endfor
                        </div>
                    </div>
                    @endforeach
                @else
                    <h5>No se encontraron Libros</h5>
                @endif
        </div>
    </div>
@endsection
