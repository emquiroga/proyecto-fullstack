@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="form-group">
    <label for="titulo" class="">Título del libro</label>
    <input class="form-control" type="text" name="titulo" id="titulo" value="{{isset($libro) ? $libro->titulo : old('titulo') }}">
</div>
<div class="form-group">
    <label for="autor" class="">Autor/a</label>
    <input class="form-control" type="text" name="autor" id="apellido" value="{{isset($libro) ? $libro->autor : old('autor') }}">
</div>
<div class="form-group mb-3">
    <label for="portada" class="">Portada</label>
    <input style="width: 100%;" class="mt-3 max-100-input" type="file" name="portada" id="portada" value="{{isset($libro) ? $libro->portada : old('portada')}}">
</div>
<div class="form-group mb-3">
    <label for="enlace" class="">Libro</label>
    <input style="width: 100%;" class="mt-3 max-100-input" type="file" name="enlace" id="enlace" value="{{isset($libro) ? $libro->enlace : old('enlace')}}">
</div>
<div class="form-group">
    <label for="comentarios" class="">Comentarios </label>
    <input class="form-control" type="text" name="comentarios" id="comentarios" value="{{isset($libro) ? $libro->comentarios : old('comentarios')}}">
</div>
<div class="form-group">
    <label for="editorial" class="">Editorial </label>
    <input class="form-control" type="text" name="editorial" id="editorial" value="{{isset($libro) ? $libro->editorial : old('editorial')}}">
</div>
<div class="form-group">
    <label for="edicion" class="">Edicion </label>
    <input class="form-control" type="text" name="edicion" id="edicion" value="{{isset($libro) ? $libro->edicion : old('edicion')}}">
</div>
<div class="form-group">
    <label for="isbn" class="">ISBN </label>
    <input class="form-control" type="text" name="isbn" id="isbn" value="{{isset($libro) ? $libro->isbn : old('isbn')}}">
</div>
<div class="form-group">
    <label for="fecha_publicacion" class="">Fecha publicacion </label>
    <input class="form-control" type="text" name="fecha_publicacion" id="fecha_publicacion" value="{{isset($libro) ? $libro->fecha_publicacion : old('fecha_publicacion')}}">
</div>
<div class="form-group">
    <label for="idioma" class="">Idioma </label>
    <input class="form-control" type="text" name="idioma" id="idioma" value="{{isset($libro) ? $libro->idioma : old('idioma')}}">
</div>
<div class="form-group">
    <label for="valoracion" class="">Valoración </label>
    <input class="form-control" type="number" min="1" max="5" name="valoracion" id="valoracion" value="{{isset($libro) ? $libro->valoracion : old('valoracion')}}">
</div>
<div class="form-group">
    <label for="paginas" class="">Paginas</label>
    <input class="form-control" type="number" min=1 name="paginas" id="paginas" value="{{isset($libro) ? $libro->paginas : old('paginas')}}">
</div>
<div class="form-group">
    <label for="apa" class="">Cita formato APA</label>
    <input class="form-control" type="text" name="apa" id="apa" value="{{isset($libro) ? $libro->apa : old('apa')}}">
</div>
<div class="form-group">
    <label for="formato" class="">Formato</label>
    <div>
        <select name="formato" id="formato" class="form-control">
            <option>Seleccionar Formato </option>
            <option value="PDF">PDF</option>
            <option value="EPUB">EPUB</option>
            <option value="MOVI">MOVI</option>
            <option value="RTF">RTF</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="categoria" class="">Categoria</label>
    <div>
        <select name="idCategoria" id="idCategoria" class="form-control">
            <option>Seleccionar Categoria </option>
                @foreach ($categorias as $categoria)
                    <option value="{{ isset($categoria) ? $categoria->id : old('Seleccionar Categoria') }}"
                >{{ $categoria->descripcion }}</option>
            @endforeach
        </select>
    </div>
</div>

<button class="blue-btn mt-3 mb-3">{{$modo}} Libro</button>
<a class="blue-btn mb-3 text-center" href="{{ url('libros/') }}">Cancelar</a>