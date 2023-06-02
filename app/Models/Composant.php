<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composant extends Model
{
    use HasFactory;

    public function plats(){
        return $this->belongsToMany(Plat::class)
                    ->withPivot('quantite', 'unite')
                    ->withTimestamps();
    }
}
