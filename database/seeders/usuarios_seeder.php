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
                        //   'id' => $faker->auto,
                          'name'  => $faker->firstName($gender = 'male'|'female'),
                          'email'  => $faker->freeEmail(),
                          'password'  => $faker->password(),
                          'created_at' => date('Y-m-d H:m:s'),
                          'updated_at' => date('Y-m-d H:m:s')
                    )
              );
        }
    }
}
