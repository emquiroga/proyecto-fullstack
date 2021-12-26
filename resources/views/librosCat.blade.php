@extends('layouts.app')
@section('content')
            <div class="book-container">
                <div class="col align-items-start">
                    <div style="display: flex; flex-direction: column;">

                    @if (count($libros) === 0)
                        <h2>No hay libros con categoria:  ####</h2>           
                    @else
                    <h2>####</h2>   
                        @foreach($libros as $libro)
                        <div class="book-header">
                            <div class="col-left">
                                <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $libro->portada }}" alt="Book portrait">
                            </div>
                            <div class="col-right">
                                <p class="book-title">{{ $libro->titulo }}</p>
                                <p class="book-author">{{ $libro->autor }}</p>
                                <p class="book-editorial">{{ $libro->editorial }}</p>
                            </div>
                        </div>
                        <div class="book-stats">
                            <div class="book-rating">
                                <div class="rating">
                                    @for ($i = 0; $i < $libro->valoracion; $i++)
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                    @endfor
                                </div>
                            <p>Rating</p>
                        </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
@endsection