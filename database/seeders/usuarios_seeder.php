<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class usuarios_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("users")->insert([
                  'first_name'  => 'Ana',
                  'last_name'  => 'Li',
                  'email'  => 'ana@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Ana.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);
        \DB::table("users")->insert([
                  'first_name'  => 'Javier',
                  'last_name'  => 'Smith',
                  'email'  => 'javier@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Javier.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);
        \DB::table("users")->insert([
                  'first_name'  => 'Juan',
                  'last_name'  => 'Muller',
                  'email'  => 'juan@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Juan.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);
        \DB::table("users")->insert([
                  'first_name'  => 'Lola',
                  'last_name'  => 'Smirmof',
                  'email'  => 'lola@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Lola.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);
        \DB::table("users")->insert([
                  'first_name'  => 'Mateo',
                  'last_name'  => 'Wang',
                  'email'  => 'mateo@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Mateo.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);
        \DB::table("users")->insert([
                  'first_name'  => 'Miriam',
                  'last_name'  => 'Garcia',
                  'email'  => 'miriam@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Miriam.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);
        \DB::table("users")->insert([
                  'first_name'  => 'Nerea',
                  'last_name'  => 'Nguyen',
                  'email'  => 'nerea@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Nerea.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);
        \DB::table("users")->insert([
                  'first_name'  => 'Osacar',
                  'last_name'  => 'Zhang',
                  'email'  => 'oscar@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Osacar.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);
        \DB::table("users")->insert([
                  'first_name'  => 'Rafael',
                  'last_name'  => 'Gonzales',
                  'email'  => 'rafael@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Rafael.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);
        \DB::table("users")->insert([
                  'first_name'  => 'Sandra',
                  'last_name'  => 'Hernandez',
                  'email'  => 'sandra@gmail.com',
                  'password'  => '$2y$10$tY5rOebMQnpRqkqO25fwnutDDX8nW7st8qIez3N7GLxmvPx4xjN/O',
                  'created_at' => date('Y-m-d H:m:s'),
                  'profile_picture' => 'profile/Sandra.png',
                  'updated_at' => date('Y-m-d H:m:s')
        ]);

    }
}
