@extends('layouts.app')
@section('content')

<div class="container max-650">
    <div class="title-row">
        <h3>Categorías</h3>
    </div>
    @foreach($categorias as $categoria)
    <div>
        <a class='link ' href="{{ url('categoria/' . $categoria->id) }}">{{ $categoria->descripcion }}</a>
    </div>
    @endforeach

</div>

@endsection
