@extends('layouts.app')

@section('content')

<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
            </div>
        </div>
    </div>--}}
                <table class="table table-striped table-hover">
                                        <thead>
                                            <th>Portada</th>
                                            <th>Id</th>
                                            <th>Titulo</th>
                                            <th>Autor</th>
                                            <th>Enlace</th>
                                            <th>Comentarios</th>
                                            <th>Editorial</th>
                                            <th>Edicion</th>
                                            <th>ISBN</th>
                                            <th>Fecha Pub</th>
                                            <th>Categoria</th>
                                            <th>Idioma</th>
                                            <th>Valaoracion</th>
                                            <!-- <th>Apa</th> -->
                                            <th>User</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($libros as $libro)
                                                <tr>
                                                    <td><img src="{{ $libro->portada }}" alt="" width="100px"></td>
                                                    <td>{{ $libro->id }}</td>
                                                    <td>{{ $libro->titulo }}</td>
                                                    <td>{{ $libro->autor }}</td>
                                                    <td><a href="{{ $libro->enlace }}">Link</a></td>
                                                    <td>{{ $libro->comentarios }}</td>
                                                    <td>{{ $libro->editorial }}</td>
                                                    <td>{{ $libro->edicion }}</td>
                                                    <td>{{ $libro->isbn }}</td>
                                                    <td>{{ $libro->fecha_publicacion }}</td>
                                                    <td>{{ $libro->categoria }}</td>
                                                    <td>{{ $libro->idioma }}</td>
                                                    <td>{{ $libro->valoracion }}</td>
                                                    <!-- <td>{{ $libro->apa }}</td> -->
                                                    <td>{{ $libro->users->name }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                </table>

</div>
@endsection
