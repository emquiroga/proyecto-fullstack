<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class libros_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Philosopher's Stone.",
            'autor' => 'J. K. Rowling',
            'portada' => 'https://static.wikia.nocookie.net/esharrypotter/images/9/9a/Harry_Potter_y_la_Piedra_Filosofal_Portada_Espa%C3%B1ol.PNG',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Bloomsbury Publishing',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780439362139',
            'fecha_publicacion' => '1997',
            'categoria' => 'Novela/ Literatura fantástica /literatura juvenil',
            'idioma' => "English",
            'valoracion' => '4',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Philosopher s Stone. New York :Arthur A. Levine Books.",
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10)
        ]);


        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Chamber of Secrets.",
            'autor' => 'J. K. Rowling',
            'portada' => 'https://static.wikia.nocookie.net/esharrypotter/images/b/b6/Harry_Potter_y_la_Camara_Secreta_Portada_Espa%C3%B1ol.PNG',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Scholastic Corporation',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780439420105',
            'fecha_publicacion' => '1998',
            'categoria' => 'Novela/ Literatura fantástica /literatura juvenil',
            'idioma' => "Spanish",
            'valoracion' => '4',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Chamber of Secrets. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10)
        ]);

        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Prisoner of Azkaban.",
            'autor' => 'J. K. Rowling',
            'portada' => 'https://static.wikia.nocookie.net/esharrypotter/images/8/81/Harry_Potter_y_el_prisionero_de_Azkaban_Portada_Espa%C3%B1ol.PNG',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Bloomsbury Publishing',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780545582933',
            'fecha_publicacion' => '1999',
            'categoria' => 'Novela/ Literatura fantástica /literatura juvenil',
            'idioma' => "Spanish",
            'valoracion' => '4',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Prisoner of Azkaban. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10)
        ]);
        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Goblet of Fire.",
            'autor' => 'J. K. Rowling',
            'portada' => 'https://www.librosdemario.com/covers/04/06/82/cover.jpg',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Bloomsbury Publishing',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9781338299175',
            'fecha_publicacion' => '2000',
            'categoria' => 'Novela/ Literatura fantástica /literatura juvenil',
            'idioma' => "Spanish",
            'valoracion' => '5',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Goblet of Fire. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10)
        ]);
        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Order of the Phoenix.",
            'autor' => 'J. K. Rowling',
            'portada' => 'https://static.wikia.nocookie.net/esharrypotter/images/9/9d/Harry_Potter_y_la_Orden_del_F%C3%A9nix_Portada_Espa%C3%B1ol.PNG',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Scholastic Corporation',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780545582971',
            'fecha_publicacion' => '2003',
            'categoria' => 'Novela/ Literatura fantástica /literatura juvenil',
            'idioma' => "English",
            'valoracion' => '5',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Order of the Phoenix. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10)
        ]);

        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Half-Blood Prince.",
            'autor' => 'J. K. Rowling',
            'portada' => 'https://i1.wp.com/bloghogwarts.com/wp-content/uploads/2013/07/Harry-Potter-BlogHogwarts-Harry-Potter-y-el-Misterio-del-Pr%C3%ADncipe.jpg',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Scholastic Corporation',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780439785969',
            'fecha_publicacion' => '2005',
            'categoria' => 'Novela/ Literatura fantástica /literatura juvenil',
            'idioma' => "English",
            'valoracion' => '5',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Half-Blood Prince. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10)
        ]);

        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Deathly Hallows.",
            'autor' => 'J. K. Rowling',
            'portada' => 'https://static.wikia.nocookie.net/esharrypotter/images/5/59/Harry_Potter_y_las_Reliquias_de_la_Muerte_portada_espa%C3%B1ol.jpg',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Scholastic Corporation',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9781644732137',
            'fecha_publicacion' => '2007',
            'categoria' => 'Novela/ Literatura fantástica /literatura juvenil',
            'idioma' => "English",
            'valoracion' => '5',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Deathly Hallows. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10)
        ]);
    }

}