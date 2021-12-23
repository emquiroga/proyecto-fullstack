{{-- <div class="card mx-auto" style="width: 18rem;">
    <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $libro->portada }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-tittle"><strong>Título: </strong>{{$libro->titulo}},</h4>
      <h5 class="card-title"><strong>Autor: </strong>{{ $libro->autor }}</h5>
      <a class="nav-link" target="_blank" href="{{url('//' . $libro->enlace)}}"><strong>Ver en línea</strong></a>
      <p class="card-text"><strong>Título: </strong>{{$libro->id}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><strong>Comentarios: </strong>{{ $libro->comentarios }}</li>
      <li class="list-group-item"><strong>Editorial: </strong>{{ $libro->editorial }}</li>
      <li class="list-group-item"><strong>Edición: </strong>{{ $libro->edicion }}</li>
      <li class="list-group-item"><strong>ISBN: </strong>{{ $libro->isbn }}</li>
      <li class="list-group-item"><strong>Fecha de publicación: </strong>{{ $libro->fecha_publicacion }}</li>
      <li class="list-group-item"><strong>Categoría: </strong>{{ $libro->categoria }}</li>
      <li class="list-group-item"><strong>Idioma: </strong>{{ $libro->idioma }}</li>
      <li class="list-group-item"><strong>Valoración: </strong>{{ $libro->valoracion }}</li>
      <li class="list-group-item"><strong>Cita formato APA: </strong>{{ $libro->apa }}</li>
    </ul>
    <div class="card-body">
      <a href="{{url('/libros/' . $libro->id . '/edit')}}"><button class="btn btn-warning w-100">Editar</button></a>
      <a href="{{url('/libros')}}"><button class="btn btn-primary w-100">Volver</button></a>
      <form method="POST" action="{{url('/libros/' . $libro->id)}}">
        @csrf
        {{ method_field('DELETE')}}
        <button type="submit" value="Borrar" class="btn btn-danger w-100" onclick="return confirm('¿Estás seguro de querer borrar este registro?')" role="button"><i class="fas fa-trash"></i></button>
    </form>
    </div>
</div> --}}

<div class="book-container">
    <button class="back-btn">
        <a href="{{url('/libros')}}">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg>
        </a>
    </button>
    <div class="book-header">
        <div class="col-left">
            <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $libro->portada }}" alt="Book portrait">
        </div>
        <div class="col-right">
            <p class="book-title">{{ $libro->titulo }}</p>
            <p class="book-author">{{ $libro->autor }}</p>
            <p class="book-editorial">{{ $libro->editorial }}</p>
            <button class="book-bookmark"><i class="far fa-heart"></i></button>
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
        <div class="book-type">
            <div><i class="fas fa-book"></i></div>
            <p>Formato</p>
        </div>
        <div class="book-pages">
            <div><strong>500</strong></div>
            <p>Páginas</p>
        </div>
    </div>
    <button class="blue-btn">Leer</button>
    <div class="book-about">
        <h2 class="about-title">Acerca de este libro</h2>
        <p>{{ $libro->comentarios }}</p>
    </div>
    <div class="buttons-wrapper">
        <form method="POST" action="{{url('/libros/' . $libro->id)}}">
            @csrf
            {{ method_field('DELETE')}}
            <button type="submit" value="Borrar" class="btn btn-danger w-100" onclick="return confirm('¿Estás seguro de querer borrar este registro?')" role="button"><i class="fas fa-trash"></i></button>
        </form>
        <a href="{{url('/libros/' . $libro->id . '/edit')}}"><button class="btn btn-warning">Editar</button></a>
    </div>
</div>
