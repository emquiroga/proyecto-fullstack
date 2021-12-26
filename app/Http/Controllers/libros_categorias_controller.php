<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Libros;

use Illuminate\Http\Request;

class libros_categorias_controller extends Controller
{
    public function index($id){
        $libros = Libros::all()->where('idCategoria', '=', $id);
        // $libros = Libros::all();
        return view('librosCat',compact('libros'));
    }
}
