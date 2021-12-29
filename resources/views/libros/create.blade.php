@extends('layouts.app')
@section('content')
    <div class="container max-650">
        <form action="{{url('/libros')}}" method="POST" enctype="multipart/form-data">
            <div class="row container-fluid justify-content-center">
                <div class="buttons-wrapper">
                </div>
                @csrf
                @include('libros.form',['modo'=>'Crear'])
            </div>
        </form>
    </div>
@endsection
