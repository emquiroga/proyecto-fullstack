<div class="card mx-auto" style="width: 18rem;">
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
</div>
