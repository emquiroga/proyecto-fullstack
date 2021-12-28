<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class categorias_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

              \DB::table('categorias')->insert(
                          ['descripcion'  => 'Arte / Recreacion']

              );
              \DB::table("categorias")->insert(
                        [  'descripcion'  => 'Autoayuda']
              );
              \DB::table("categorias")->insert(
                          ['descripcion' => 'Biografias / Memorias']
              );
              \DB::table("categorias")->insert(
                          ['descripcion' => 'Ciencia']
              );
              \DB::table("categorias")->insert(
                         [ 'descripcion'  => 'Ciencia Finccion / Fantasía']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Computacion / Tecnologia']
              );
              \DB::table("categorias")->insert(
                         [ 'descripcion'  => 'Ficción / Literatura']
              );
              \DB::table("categorias")->insert(
                         ['descripcion'  => 'Filosofia']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Finanzas / Inversión']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Historia']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Libros Infantiles']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Misterio / Suspenso']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Politica']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Religión / Espiritualidad']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Romance']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Salud/Cuerpo/mente']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Comics']
              );
    }
}
