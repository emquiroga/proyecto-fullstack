@extends('layouts.app')
@section('content')

        <div class="container">

            @foreach($categorias as $categoria)
                <div>
                    <a class='link ' href="{{ url('categoria/' . $categoria->id) }}">{{ $categoria->descripcion }}</a>
                </div>
            @endforeach

    </div>

@endsection