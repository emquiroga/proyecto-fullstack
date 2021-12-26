<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Favoritos extends Controller
{
    public function index(){
        $userId = Auth::id();
        $user = User::find($userId);
        // $libro = Libros::find(3);
        // return view('favs',compact('user' , 'libro'));
        return view('favs',compact('user'));
    }
}
