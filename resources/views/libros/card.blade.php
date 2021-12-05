<div class="card mx-auto" style="width: 18rem;">
    <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $libro->portada }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-tittle">{{$libro->titulo}},</h4>
      <h5 class="card-title">{{ $libro->autor }}</h5>
      <p class="card-text">{{ $libro->enlace }}</p>
      <p class="card-text">{{$libro->id}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $libro->comentarios }}</li>
      <li class="list-group-item">{{ $libro->editorial }}</li>
      <li class="list-group-item">{{ $libro->edicion }}</li>
      <li class="list-group-item">{{ $libro->isbn }}</li>
      <li class="list-group-item">{{ $libro->fecha_publicacion }}</li>
      <li class="list-group-item">{{ $libro->categoria }}</li>
      <li class="list-group-item">{{ $libro->idioma }}</li>
      <li class="list-group-item">{{ $libro->valoracion }}</li>
      <li class="list-group-item">{{ $libro->apa }}</li>
    </ul>
    <div class="card-body">
      <a href="{{url('/libros/' . $libro->id . '/edit')}}"><button class="btn btn-warning w-100">Editar</button></a>
      <a href="{{url('/libros')}}"><button class="btn btn-primary w-100">Volver</button></a>
    </div>
</div>
