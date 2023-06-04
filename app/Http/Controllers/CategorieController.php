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

    public function plats($categorie_id)
    {
        $plats = Categorie::find($categorie_id)->plats;
        return view('guest.plats', compact('plats'));
    }
}
