@extends('layouts.app')
@section('content')
    @if(Session::has('mensaje'))
        <div class="alert alert-success">
            {{Session::get('mensaje')}}
        </div>
    @endif
    <div class="container-fluid">
        @include('libros.card')
    </div>
@endsection
