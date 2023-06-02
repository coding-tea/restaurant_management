<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    public function Categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function composants(){
        return $this->belongsToMany(Composant::class)
                    ->withPivot('quantite', 'unite')
                    ->withTimestamps();
    }

    public function commandes(){
        return $this->belongsToMany(Commande::class)
                    ->withPivot('nombre')
                    ->withTimestamps();
    }
}
