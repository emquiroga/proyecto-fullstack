<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\User;
use Illuminate\Http\Request;


class user_libros_controller extends Controller
{
    public function index(){
        $libros = Libros::all();
        return view('books', compact('libros'));
    }
}
