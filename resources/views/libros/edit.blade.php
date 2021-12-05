@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="alert alert-warning" role="alert">
            {{$libro->id}}
        </div>
        <form action="{{url('/libros/' . $libro->id)}}" method="POST" enctype="multipart/form-data">
            <div class="row container-fluid justify-content-center">
                @csrf
                {{method_field('PATCH')}}
                @include('libros.form', ['modo'=>'Editar'])
            </div>
        </form>
    </div>
@endsection
