<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Categorias;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\FavoritosController;
use App\Http\Controllers\libros_categorias_controller;
use App\Http\Controllers\user_libros_controller;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('libros', LibrosController::class)->middleware('auth');
    Route::post('/libros/busqueda', [LibrosController::class, 'search'])->name('libro');
    Route::resource('contacto', ContactoController::class);
    Route::get('/favoritos',[FavoritosController::class, 'index']);
    Route::get('/favoritos/{id}',[FavoritosController::class, 'fav_noFav']);
    Route::get('/perfil',[user_libros_controller::class, 'miPerfil']);
    Route::post('/perfil',[user_libros_controller::class, 'updateImage']);
    Route::get('/perfil/{id}',[user_libros_controller::class, 'perfilVisitor']);
    Route::get('/categoria/{id}',[libros_categorias_controller::class, 'index']);
    Route::get('/categorias',[Categorias::class, 'getAll']);
    Route::get('/user/reset_password',[ResetPasswordController::class, 'showResetForm']);
    Route::post('reset_password', [AccountsController::class,'resetPassword']);
    Route::get('/secciones', [LibrosController::class,'secciones']);

});
