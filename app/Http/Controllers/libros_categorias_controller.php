<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class libros_categorias_controller extends Controller
{
    public function index($id){
        $libros = DB::table('libros')
                ->inRandomOrder()
                ->where('idCategoria', '=', $id)
                ->get();

        $categoria = Categoria::find($id);
        return view('categorias.libros_por_categoria',compact('libros', 'categoria'));
    }
}
