<?php

namespace App\Http\Controllers;


use App\Models\Favoritos;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoritosController extends Controller
{
    public function index(){
        return view('favoritos.favs',array('user' => Auth::user()));
    }

    public function fav_noFav($idLibro)
    {
        $userId = Auth::id();
        $fav = Favoritos::where('user_id', $userId)->where('libros_id', $idLibro )->first();
        if (!$fav) {
           Favoritos::insert(['user_id' => $userId, 'libros_id' => $idLibro]);
        }else{
            DB::table('favoritos')->where('id', '=', $fav->id)->delete();
        } 
        return back()->withInput();

    }

}
