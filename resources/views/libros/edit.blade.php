@extends('layouts.app')
@section('content')
    <div class="container max-650">
        <form action="{{url('/libros/' . $libro->id)}}" method="POST" enctype="multipart/form-data">
            <div class="row container-fluid justify-content-center">
                <div class="buttons-wrapper">
                    <button class="icon-btn">
                        <a href="{{ url()->previous() }}">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg>
                        </a>
                    </button>
                    <form method="POST" action="{{url('/libros/' . $libro->id)}}">
                        @csrf
                        {{ method_field('DELETE')}}
                        <button type="submit" value="Borrar" class="icon-btn" onclick="return confirm('¿Estás seguro de querer borrar este registro?')" role="button">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path></svg>
                        </button>
                    </form>
                </div>
                @csrf
                {{method_field('PATCH')}}
                @include('libros.form', ['modo'=>'Editar'])
            </div>
        </form>
    </div>
@endsection
