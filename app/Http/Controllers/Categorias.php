<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class Categorias extends Controller
{
    public function getAll(){
        $categorias =  Categoria::all();
        return view('categorias.categorias',compact('categorias'));
    }
}
