<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class,'idUser');
    }
    public function categorias(){
        return $this->belongsTo(Categoria::class,'idCategoria');
    }

    public function usersFav(){
        return $this->belongsToMany(User::class,'favoritos');
    }
}
