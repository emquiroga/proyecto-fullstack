<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class user_libros_controller extends Controller
{
        public function miPerfil()
        {
                $userId = Auth::id();
                $user = DB::table('users')->whereId($userId)->first();
                $libros = Libros::all()->where('idUser', '=', $userId);
                return view('perfil.miPerfil', compact('user', 'libros'));
        }

        public function perfilVisitor($id)
        {
                if ($id == Auth::id()) {
                        return $this->miPerfil();
                };
                $user = DB::table('users')->whereId($id)->first();
                $libros = Libros::all()->where('idUser', '=', $id);
                return view('perfil.visitor', compact('user', 'libros'));
        }

        public function updateImage(Request $request)
        {
                $validations = [
                        'profile_picture' => 'required|max:10000|mimes:jpeg,jpg,png',
                ];
                $mensaje = [
                        'profile_picture.required' => 'La imagen es requerida',
                ];

                $this->validate($request, $validations, $mensaje);

                if ($request->hasFile('profile_picture')) {
                        $user = Auth::user();
                                if ($user->profile_picture != 'profile/default.png') {
                                        Storage::delete('public/profile' . $user->profile_picture);
                                }
                        $user->profile_picture = $request->file('profile_picture')->store('profile', 'public');
                        User::where('id', '=', Auth::id())->update([
                                'profile_picture' => $user->profile_picture
                        ]);
                }
                $libros = Libros::all()->where('idUser', '=', Auth::id());
                return view('perfil.miPerfil', compact('user', 'libros'));
        }
}
