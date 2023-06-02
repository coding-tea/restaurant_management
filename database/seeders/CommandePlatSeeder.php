<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandePlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table("commande_plat")->insert([
            [
                "commande_id"=>1, 
                "plat_id"=>2, 
                "nombre"=>3
            ],
             [
                "commande_id"=>1, 
                "plat_id"=>4, 
                "nombre"=>2
            ],
             [
                "commande_id"=>1, 
                "plat_id"=>6, 
                "nombre"=>1
            ],
             [
                "commande_id"=>2, 
                "plat_id"=>1, 
                "nombre"=>2
            ],
             [
                "commande_id"=>2, 
                "plat_id"=>6, 
                "nombre"=>3
            ],
             [
                "commande_id"=>2, 
                "plat_id"=>4, 
                "nombre"=>2
            ],
             [
                "commande_id"=>2, 
                "plat_id"=>2, 
                "nombre"=>1
            ],
        ]);
    }
}
