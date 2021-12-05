@extends('layouts.app')
@section('content')
    <div class="container">
    </div>
    <form action="{{url('/libros')}}" method="POST" enctype="multipart/form-data">
        <div class="row container-fluid justify-content-center">
            @csrf
            @include('libros.form',['modo'=>'Editar'])
        </div>
    </form>
@endsection
