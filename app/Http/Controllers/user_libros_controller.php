<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class user_libros_controller extends Controller
{
        public function miPerfil(){
                $userId = Auth::id();
                $user = DB::table('users')->whereId($userId)->first();
                $libros = Libros::all()->where('idUser','=', $userId);
                return view('perfil.miPerfil', compact('user', 'libros'));

        }

        public function perfilVisitor($id){
                $user = DB::table('users')->whereId($id)->first();
                $libros = Libros::all()->where('idUser','=', $id);
                return view('perfil.visitor', compact('user', 'libros'));
                
        }
}
