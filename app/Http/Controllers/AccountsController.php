<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccountsController extends Controller
{
        public function resetPassword(Request $request)
        {

            $token = $this->validatePasswordRequest($request);

            $request->token = $token->token;

            $validator = [
                'email' => 'required|email',
                'password' => 'required|confirmed'];
            
            $mensaje = [
                    'required' => 'El campo :attribute es requerido',
            ];

            $this->validate($request, $validator, $mensaje);

            $tokenData = DB::table('password_resets')->where('token', $request->token)->first();
 
            if (!$tokenData) return view('auth.passwords.email');

            // $user = request()->except('_token', '_method');

            $user = User::where('email', $tokenData->email)->first();

            if (!$user) return redirect()->back()->withErrors(['email' => 'User not found']);

            $password = $request->password;
            $password_hash = Hash::make($password);


            $user->password = $password_hash;
            User::where('id', '=', Auth::id())->update([
                'password'=> $user->password,
            ]);

            Auth::login($user);

            $mensaje = 'Contreseña Actualizada';

            DB::table('password_resets')->where('email', $user->email)
            ->delete();
            $libros = Libros::all()->where('idUser','=', Auth::id());
            return view('perfil.miPerfil', compact('user', 'libros', 'mensaje'));
        }


        public function validatePasswordRequest(Request $request){

                $user = DB::table('users')->where('email', '=', $request->email)->first();
                if (!$user) {
                    return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
                }
                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => Str::random(60),
                    'created_at' => Carbon::now()
                ]);
                $tokenData = DB::table('password_resets')->where('email', $request->email)->first();

                return $tokenData;
        }
}
