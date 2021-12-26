<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\Favoritos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoritosController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        return view('favoritos.favs',compact('user'));
    }
    public function favUser($id){
        $user = User::find($id);
        return view('favoritos.favs',compact('user'));
    }
    public function store($idLibro)
    {
        $userId = Auth::id();
        $fav = Favoritos::find()->where('user_id','=', $userId  and 'libros_id' .'='. $idLibro);

        if ($fav > 0) {
            DB::table('users')->where('id', '=', $fav->id)->delete();
        }else{
            Favoritos::insert(['user_id' => $userId, 'libros_id' => $idLibro]);
        }
        return redirect('/libros'.'/'.$idLibro);

    }

}
