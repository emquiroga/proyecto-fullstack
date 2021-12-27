<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Favoritos;
use App\Models\Libros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'title' => 'Mis libros',
        ];
        $libros['libros'] = Libros::all();
        return view('libros.index', $params, $libros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categorias = Categoria::all();
        $params = [
            'title' => 'Ingreso de Libro',
            'categorias' => $categorias
        ];
        return view('libros.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = [
            'titulo' => 'required',
            'autor' => 'required',
            'portada' => 'required|max:10000|mimes:jpeg,jpg,png',
            'enlace' => 'required',
            'comentarios' => 'required',
            'editorial' => 'required',
            'edicion' => 'required',
            'isbn' => 'required',
            'fecha_publicacion' => 'required',
            'idioma' => 'required',
            'valoracion' => 'required',
            'paginas' => 'required',
            'apa' => 'required',
            'formato' => 'required',
            'idCategoria' => 'required',
        ];
        $mensaje = [
            'required' => 'El campo :attribute es requerido',
            'portada.required' => 'La portada es requerida',
        ];
        $this->validate($request, $validations, $mensaje);

        $libro = request()->except('_token');

        if($request->hasFile('portada')){
            $libro['portada'] = $request->file('portada')->store('uploads', 'public');
        }
        $libro['idUser'] = Auth::id();
        Libros::insert($libro);

        return redirect('libros')->with('mensaje', 'Libro agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estado = false;
        $userId = Auth::id();
        $libro = Libros::findOrFail($id);
        $fav = Favoritos::where('user_id', $userId)->where('libros_id', $id)->first();
        if ($fav) {
            $estado = true;
        }
        $params = [
            'title' => 'Detalle del libro',
            'libro' => $libro,
            'estado' => $estado
        ];
        return view('libros.show', $params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(Libros $libros, $id)
    {
        $categorias = Categoria::all();
        $libro = Libros::findOrFail($id);
        $params = [
            'title' => 'Editar datos',
            'libro' => $libro,
            'categorias' => $categorias
        ];
        return view('libros.edit', $params, compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validations = [
            'titulo' => 'required',
            'autor' => 'required',
            'portada' => 'required|max:10000|mimes:jpeg,jpg,png',
            'enlace' => 'required',
            'comentarios' => 'required',
            'editorial' => 'required',
            'edicion' => 'required',
            'isbn' => 'required',
            'fecha_publicacion' => 'required',
            'idCategoria' => 'required',
            'idioma' => 'required',
            'valoracion' => 'required',
            'apa' => 'required',
            'paginas' => 'required',
            'formato' => 'required',
        ];
        $mensaje = [
            'required' => 'El campo :attribute es requerido',
            'portada.required' => 'La portada es requerida',
        ];
        $this->validate($request, $validations, $mensaje);

        $libro_update = request()->except('_token', '_method');

        if($request->hasFile('portada')){
            $libro = Libros::findOrFail($id);
            Storage::delete('public/' . $libro->portada);
            $libro_update['portada'] = $request->file('portada')->store('uploads', 'public');
        }

        Libros::where('id', '=', $id)->update($libro_update);

        $libro = Libros::findOrFail($id);
        $params = [
            'title' => 'Detalle del libro',
            'libro' => $libro
        ];

        return redirect('/libros/' . $id)->with('mensaje', 'Libro actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro=Libros::findOrFail($id);
        if(Libros::destroy($id) && Storage::delete('public/'. $libro->portada)) {
            Storage::delete('public/'. $libro->portada);
        }
        Libros::destroy($id);
        return redirect('libros')->with('mensaje', 'Libro eliminado con éxito de tu biblioteca');
    }

    public function search(Request $request){

        $libro =  $request->input('libro');
        $libros = DB::table('libros')->where('titulo','LIKE','%'.$libro.'%')->get();

        if ($libros) {
            $params = [
                'title' => 'Resultados de Busqueda',
                'libros' => $libros
            ];
            return view('libros.busqueda', $params);
        }
        return view('libros.not_found');
    }
}
