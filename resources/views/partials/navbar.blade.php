<nav class="navbar navbar-expand-md shadow-sm">
    <div class="container">
        <!-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name'); }}
        </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#FFFFFF" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
        </button>
        <form style="display:flex" method="POST" action="{{ url('/libros/busqueda') }} ">
                {{csrf_field()}}
                    <div><input id="libro" name="libro" class="form-control" type="search" placeholder="Buscar Libro" aria-label="Search"></div>
                    <!-- <div><button class="btn btn-outline-success" type="submit">Buscar</button></div> -->
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href={{url('/libros')}} class="nav-link">Libros</a>
                </li>
                <li class="nav-item">
                    <a href={{url('/contacto')}} class="nav-link">Contacto</a>
                </li>
                <li class="nav-item">
                    <a href={{url('/favoritos')}} class="nav-link">Favoritos</a>
                </li>
                <li class="nav-item">
                    <a href={{url('/categorias')}} class="nav-link">Categorias</a>
                </li>
                <!-- <li>
                <form style="display:flex" method="POST" action="{{ url('/libros/busqueda') }} ">
                {{csrf_field()}}
                    <div><input id="libro" name="libro" class="form-control" type="search" placeholder="Buscar Libro" aria-label="Search"></div>
                    <div><button class="btn btn-outline-success" type="submit">Buscar</button></div>
                 </form>
                </li> -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Opciones
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item" href="{{url('/perfil')}}"> Mi Pefil</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
  
        </div>
    </div>
</nav>
