<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComposantPlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("composant_plat")->insert([
            [
                  'plat_id'=>1,
             'composant_id'=>9,
              'quantite'=>250,
            'unite'=>"g",
       
            ],
         [
                  'plat_id'=>6,
             'composant_id'=>6,
              'quantite'=>150,
            'unite'=>"g",
       
            ],
              [
                  'plat_id'=>6,
             'composant_id'=>7,
              'quantite'=>50,
            'unite'=>"g",
       
            ],
              [
                  'plat_id'=>6,
             'composant_id'=>8,
              'quantite'=>1,
            'unite'=>"unité",
       
            ],
        ]);
    }
}
