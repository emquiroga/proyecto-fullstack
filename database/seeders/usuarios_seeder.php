<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class usuarios_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
              \DB::table("users")->insert(
                    array(
                          'name'  => $faker->firstName($gender = 'male'|'female'),
                          'email'  => $faker->freeEmail(),
                          'password'  => $faker->password(),
                          'created_at' => date('Y-m-d H:m:s'),
                          'updated_at' => date('Y-m-d H:m:s')
                    )
              );
        };
        \DB::table("users")->insert([
                  'name'  => 'Juan',
                  'email'  => 'juan@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
        ]);

    }
}
