<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('portada');
            $table->string('enlace');
            $table->string('comentarios');
            $table->string('editorial');
            $table->string('edicion');
            $table->string('isbn');
            $table->string('fecha_publicacion');
            $table->string('idioma');
            $table->string('valoracion');
            $table->string('apa');
            $table->string('formato');
            $table->integer('paginas');

            $table->timestamps();

            $table->foreignId('idUser')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('idCategoria')
                ->nullable()
                ->constrained('categorias')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
