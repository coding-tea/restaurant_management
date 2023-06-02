<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComposantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("composants")->insert([
            [
                "libelle"=>"viande"
            ],
             [
                "libelle"=>"poulet"
             ],
              [
                "libelle"=>"tomate"
              ],
               [
                "libelle"=>"pomme de terre"
               ],
                [
                "libelle"=>"pomme"
                ],
                 [
                "libelle"=>"viande hachée"
                 ],
                  [
                "libelle"=>"oignon"
                  ],
                   [
                "libelle"=>"pâte pizza"
                   ],
                    [
                "libelle"=>"fruits de mer"
            ]
        ]);
    }
}
