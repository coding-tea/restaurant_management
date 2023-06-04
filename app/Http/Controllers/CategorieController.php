<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        $categorie = Categorie::all();
        return view('guest.menu', compact('categorie'));
    }

    public function plats($categorie)
    {
        $plats = Categorie::find($categorie)->plats;
        return view('visiteur.plats', compact('plats'));
    }
}
