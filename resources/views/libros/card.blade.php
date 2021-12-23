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
    <div class="buttons-wrapper">
        <button class="icon-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path></svg>
        </button>
        <button class="icon-btn">
            <a href="{{url('/libros')}}">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg>
            </a>
        </button>
    </div>
    <div class="book-header">
        <div class="col-left">
            <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $libro->portada }}" alt="Book portrait">
        </div>
        <div class="col-right">
            <p class="book-title">{{ $libro->titulo }}</p>
            <p class="book-author">{{ $libro->autor }}</p>
            <p class="book-editorial">{{ $libro->editorial }}</p>
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
    <button class="blue-btn"><a target="_blank" href="{{url('//' . $libro->enlace)}}">Leer</a></button>
    <div class="book-about">
        <h2 class="about-title">Acerca de este libro</h2>
        <p>{{ $libro->comentarios }}</p>
    </div>
    <div class="container mb-3">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Idioma
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><strong>{{ $libro->idioma }}</strong></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Edición
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><strong>{{ $libro->edicion }}</strong></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Fecha de Publicación
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><strong>{{ $libro->fecha_publicacion }}</strong></div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Categoría
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><strong>{{ $libro->categoria }}</strong></div>
                </div>
              </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                ISBN
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><strong>{{ $libro->isbn }}</strong></div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                Cita formato APA
              </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><strong>{{ $libro->apa }}</strong></div>
            </div>
          </div>
      </div>
    </div>
    <div class="buttons-wrapper">
        <form method="POST" action="{{url('/libros/' . $libro->id)}}">
            @csrf
            {{ method_field('DELETE')}}
            <button type="submit" value="Borrar" class="icon-btn" onclick="return confirm('¿Estás seguro de querer borrar este registro?')" role="button">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path></svg>
            </button>
        </form>
        <a href="{{url('/libros/' . $libro->id . '/edit')}}"><button class="blue-btn btn-small"><a href="{{url('/libros/' . $libro->id . '/edit')}}">Editar</a></button>
    </div>
</div>
