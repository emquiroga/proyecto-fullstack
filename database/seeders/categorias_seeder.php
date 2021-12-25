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
                          ['descripcion'  => 'Arte / Recreacion',
                          'icono' => 'icons/VectorArte.png']
              );
              \DB::table("categorias")->insert(
                        [  'descripcion'  => 'Autoayuda',
                        'icono' => 'icons/VectorAutoAyuda.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion' => 'Biografias / Memorias',
                          'icono' => 'icons/VectorBiografias.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion' => 'Ciencia',
                          'icono' => 'icons/VectorCiencia.png']
              );
              \DB::table("categorias")->insert(
                         [ 'descripcion'  => 'Ciencia Finccion / Fantasía',
                         'icono' => 'icons/VectorCienciaFiccion.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Computacion / Tecnologia',
                          'icono' => 'icons/VectorComputacion.png']
              );
              \DB::table("categorias")->insert(
                         [ 'descripcion'  => 'Ficción / Literatura',
                         'icono' => 'icons/VectorFiccion.png']
              );
              \DB::table("categorias")->insert(
                         ['descripcion'  => 'Filosofia',
                         'icono' => 'icons/VectorFilosofia.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Finanzas / Inxersión',
                          'icono' => 'icons/VectorFinanzas.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Historia',
                          'icono' => 'icons/VectorHistoria.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Libros Infantiles',
                          'icono' => 'icons/VectorInfantiles.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Misterio / Suspenso',
                          'icono' => 'icons/VectorMisterio.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Politica',
                          'icono' => 'icons/VectorPolitica.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Religión / Espiritualidad',
                          'icono' => 'icons/VectorReligion.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Romance',
                          'icono' => 'icons/VectorRomance.png']
              );
              \DB::table("categorias")->insert(
                          ['descripcion'  => 'Salud Cuerpo mente',
                          'icono' => 'icons/VectorSalud.png']
              );
    }
}
