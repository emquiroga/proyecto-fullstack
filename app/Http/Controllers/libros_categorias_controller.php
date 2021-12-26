<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Libros;

use Illuminate\Http\Request;

class libros_categorias_controller extends Controller
{
    public function index($id){
        $libros = Libros::all()->where('idCategoria', '=', $id);
        $categoria = Categoria::find($id);
        return view('categorias.libros_por_categoria',compact('libros', 'categoria'));
    }
}
