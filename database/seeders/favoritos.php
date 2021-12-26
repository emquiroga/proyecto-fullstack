<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class favoritos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('favoritos')->insert([
            'user_id'  => 1,
            'libros_id'  => 2
        ]);
        \DB::table('favoritos')->insert([
            'user_id'  => 2,
            'libros_id'  => 3
        ]);
        \DB::table('favoritos')->insert([
            'user_id'  => 6,
            'libros_id'  => 3
        ]);
        \DB::table('favoritos')->insert([
            'user_id'  => 9,
            'libros_id'  => 3
        ]);
        \DB::table('favoritos')->insert([
            'user_id'  => 4,
            'libros_id'  => 3
        ]);
        \DB::table('favoritos')->insert([
            'user_id'  => 1,
            'libros_id'  => 6
        ]);
        \DB::table('favoritos')->insert([
            'user_id'  => 3,
            'libros_id'  => 5
        ]);
        \DB::table('favoritos')->insert([
            'user_id'  => 3,
            'libros_id'  => 8
        ]);
        \DB::table('favoritos')->insert([
            'user_id'  => 3,
            'libros_id'  => 1
        ]);
    }
}
