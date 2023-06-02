<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert( [
            [
                'titre'=>"Entrée chaude",
                'photo'=>"categories/entree_chaude.jpeg"
            ],
            [
                'titre'=>"Entrée froide",
                'photo'=>"categories/entree_froide.jpeg"
            ],
            [
                'titre'=>"Pizza",
                'photo'=>"categories/pizza.jpg"
            ],
            [
                'titre'=>"Tajine",
                'photo'=>"categories/tajine.jpeg"
            ],
            [
                'titre'=>"Dessert",
                'photo'=>"categories/dessert.jpeg"
            ]
        
        ]);
    }
}
