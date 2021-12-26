@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="col align-items-start">
                    <div style="display: flex; flex-direction: column;">
                        <h3>Tus Favoritos</h3>
                            @foreach($user->librosFav as $libro)
                                <br>
                                <div class="row"> 
                                        <div class="col-3"><img src="{{ asset('storage').'/'.$libro->portada}}" style="width: 40%;"> </div>
                                        <div class="col"> 
                                            <div><a href="{{ url('/libros/'.$libro->id) }}">{{ $libro->titulo }}</a></div>
                                            <div>{{ $libro->autor }}</div>
                                            <div>Puntuacion</div>
                                        </div>
                                </div>
                        
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection