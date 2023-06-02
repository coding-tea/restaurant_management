<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plats')->insert( [
            [
                'categorie_id'=>1,
                'intitule'=>"Soupe fruit de mer",
                'description'=>"Soupe asiathique",
                'prix'=>"45"
            ],
            [
                'categorie_id'=>1,
                'intitule'=>"Soupe aux légumes",
                'description'=>"",
                'prix'=>"35"
            ],
             [
                'categorie_id'=>2,
                'intitule'=>"Salade marocaine",
                'description'=>"Tomate et oignon",
                'prix'=>"25"
            ],
             [
                'categorie_id'=>2,
                'intitule'=>"Salade niçoise",
                'description'=>"Variétés de légumes et fruits",
                'prix'=>"30"
            ],
             [
                'categorie_id'=>2,
                'intitule'=>"Salade fruit de mer",
                'description'=>"Salade asiathique",
                'prix'=>"55"
            ],
             [
                'categorie_id'=>3,
                'intitule'=>"Pizza viande hachée",
                'description'=>"fromage, olives ...",
                'prix'=>"50"
            ],
  [
                'categorie_id'=>3,
                'intitule'=>"Pizza poulet",
                'description'=>"fromage, champignions ...",
                'prix'=>"45"
            ],
              [
                'categorie_id'=>3,
                'intitule'=>"Pizza végétarienne",
                'description'=>"aubergine, fromage, poivron...",
                'prix'=>"35"
            ],
              [
                'categorie_id'=>3,
                'intitule'=>"Pizza quatre saisons",
                'description'=>"pizza à personnalisé selon vos goûts",
                'prix'=>"65"
            ],
              [
                'categorie_id'=>4,
                'intitule'=>"Tajine Viande aux pruneaux et raisins",
                'description'=>"",
                'prix'=>"68"
            ],
            [
                'categorie_id'=>4,
                'intitule'=>"Tajine poulet au citron",
                'description'=>"",
                'prix'=>"60"
            ],
                 [
                'categorie_id'=>4,
                'intitule'=>"Tajine aux légumes",
                'description'=>"avec poulet",
                'prix'=>"48"
            ],
                 [
                'categorie_id'=>5,
                'intitule'=>"Flan au caramel",
                'description'=>"",
                'prix'=>"15"
            ],
             [
                'categorie_id'=>5,
                'intitule'=>"Tiramisu",
                'description'=>"",
                'prix'=>"20"
            ],
              [
                'categorie_id'=>5,
                'intitule'=>"Glace",
                'description'=>"une boule de glace",
                'prix'=>"10"
            ],
        ]);
    }
}
