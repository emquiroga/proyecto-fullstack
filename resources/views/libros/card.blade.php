<div class="book-container">
    <div class="buttons-wrapper">
        @if($estado == true)
        <a  href="{{ url('favoritos/'.$libro->id) }}">
          <ion-icon name="heart"></ion-icon>
        </a>
        @else
        <a href="{{ url('favoritos/'.$libro->id) }}">
            <ion-icon  name="heart-outline"></ion-icon>
        </a>
        @endif
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
            <p>Formato / {{$libro->formato}}</p>
        </div>
        <div class="book-pages">
            <div><strong>{{$libro->paginas}}</strong></div>
            <p>Páginas</p>
        </div>
      </div>
      <p class="book-editorial"> <i>by:</i> <a href="{{ url('perfil/' . $libro->users->id) }}">@<span>{{ $libro->users->first_name }}</span></a></p>
    <button class="blue-btn"><a target="_blank" href="{{ url(asset('storage').'/'.$libro->enlace)}}" >Leer</a></button>
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
                  <div class="accordion-body"><a href="{{ url('categoria/' . $libro->idCategoria) }}"><strong>{{ $libro->categorias->descripcion }}</strong></a></div>
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

    @if($libro->idUser == $user)
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
    @endif


</div>
