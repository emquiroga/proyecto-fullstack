<?php

use App\Http\Controllers\Categorias;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Favoritos;
use App\Http\Controllers\libros_categorias_controller;

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
Route::get('/categoria/{id}',[libros_categorias_controller::class, 'index']);
Route::get('/categorias',[Categorias::class, 'getAll']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('libros', LibrosController::class)->middleware('auth');
    Route::resource('contacto', ContactoController::class);
    Route::get('/favoritos',[Favoritos::class, 'index']);
});
