<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("serveurs")->insert([[
           
            "date_embauche"=>"2022/01/14",
            "user_id"=>2
        ],
        [
           
            "date_embauche"=>"2022/05/04",
            "user_id"=>3
        ],
        [
         
            "date_embauche"=>"2023/02/09",
            "user_id"=>4
        ]
    ]);
    }
}
