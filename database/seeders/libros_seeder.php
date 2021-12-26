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
            'portada' => 'uploads/01.png',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Bloomsbury Publishing',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780439362139',
            'fecha_publicacion' => '1997',
            'idioma' => "English",
            'valoracion' => '4',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Philosopher s Stone. New York :Arthur A. Levine Books.",
            'formato' => 'PDF',
            'paginas' => 240,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10),
            'idCategoria' => 5,
        ]);


        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Chamber of Secrets.",
            'autor' => 'J. K. Rowling',
            'portada' => 'uploads/02.png',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Scholastic Corporation',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780439420105',
            'fecha_publicacion' => '1998',
            'idioma' => "Spanish",
            'valoracion' => '4',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Chamber of Secrets. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10),
            'idCategoria' => 5,
            'paginas' => 251,
            'formato' => 'PDF'
        ]);

        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Prisoner of Azkaban.",
            'autor' => 'J. K. Rowling',
            'portada' => 'uploads/03.png',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Bloomsbury Publishing',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780545582933',
            'fecha_publicacion' => '1999',
            'idioma' => "Spanish",
            'valoracion' => '4',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Prisoner of Azkaban. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10),
            'idCategoria' => 5,
            'paginas' => 317,
            'formato' => 'PDF'
        ]);
        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Goblet of Fire.",
            'autor' => 'J. K. Rowling',
            'portada' => 'uploads/04.jpg',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Bloomsbury Publishing',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9781338299175',
            'fecha_publicacion' => '2000',
            'idioma' => "Spanish",
            'valoracion' => '5',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Goblet of Fire. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10),
            'idCategoria' => 5,
            'paginas' => 636,
            'formato' => 'PDF'
        ]);
        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Order of the Phoenix.",
            'autor' => 'J. K. Rowling',
            'portada' => 'uploads/05.png',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Scholastic Corporation',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780545582971',
            'fecha_publicacion' => '2003',
            'idioma' => "English",
            'valoracion' => '5',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Order of the Phoenix. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10),
            'idCategoria' => 5,
            'paginas' => 901,
            'formato' => 'PDF'
        ]);

        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Half-Blood Prince.",
            'autor' => 'J. K. Rowling',
            'portada' => 'uploads/06.jpg',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Scholastic Corporation',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780439785969',
            'fecha_publicacion' => '2005',
            'idioma' => "English",
            'valoracion' => '5',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Half-Blood Prince. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10),
            'idCategoria' => 5,
            'paginas' => 607,
            'formato' => 'PDF'
        ]);

        \DB::table('libros')->insert([
            'titulo' => "Harry Potter and the Deathly Hallows.",
            'autor' => 'J. K. Rowling',
            'portada' => 'uploads/07.jpg',
            'enlace' => 'https://www.amazon.com/s?k=harry+potter+books&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=32E5O23ZGJHXG&sprefix=harry+potter+b%2Caps%2C362&ref=nb_sb_ss_ts-doa-p_3_14',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Scholastic Corporation',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9781644732137',
            'fecha_publicacion' => '2007',
            'idioma' => "English",
            'valoracion' => '5',
            'apa' => "Rowling, J. K., author. (1998). Harry Potter and the Deathly Hallows. New York :Arthur A. Levine Books.",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10),
            'idCategoria' => 5,
            'paginas' => 607,
            'formato' => 'PDF'
        ]);
        \DB::table('libros')->insert([
            'titulo' => "The Fellowship of the Ring.",
            'autor' => 'J. R. R. Tolkien',
            'portada' => 'uploads/08.gif',
            'enlace' => 'https://www.amazon.com/-/es/J-R-R-Tolkien/dp/0358653037/ref=sr_1_3?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=Z1PUUIX03G6K&keywords=lord+of+the+rings+books&qid=1638916358&sprefix=lord+of+the+rings+books%2Caps%2C352&sr=8-3',
            'comentarios' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'editorial' => 'Scholastic Corporation',
            'edicion' => $faker->randomDigit(),
            'isbn' => '9780261102385',
            'fecha_publicacion' => '1954',
            'idioma' => "English",
            'valoracion' => '5',
            'apa' => "Tolkien, J. R. R. 1991. The Lord of the Rings. London, England: HarperCollins..",
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s'),
            'idUser' => $faker->numberBetween($min = 1, $max = 10),
            'idCategoria' => 5,
            'paginas' => 423,
            'formato' => 'PDF'
        ]);
    }

}