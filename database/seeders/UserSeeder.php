<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "role"=>"admin",
                "name"=>"admin",
                "email"=>"admin@example.com",
                "password"=>Hash::make("admin"),
                "created_at"=>now()
            ],
             [
                "role"=>"serveur",
                 "name"=>"hicham saki",
                "email"=>"saki@gmail.com",
                "password"=>Hash::make("saki"),
                "created_at"=>now()
             ],
             [
                "name"=>"Fouad melouki",
                "role"=>"serveur",
                "email"=>"Fouad@example.com",
                "password"=>Hash::make("Fouad"),
                "created_at"=>now()
             ],
               [
                "role"=>"serveur",
                 "name"=>"Mohamed redouan",
                "email"=>"redouan@example.com",
                "password"=>Hash::make("redouan"),
                "created_at"=>now()
             ],
        ]);
    }
}
