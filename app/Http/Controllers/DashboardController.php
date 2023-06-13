<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view('dashboard', compact('categories'));
    }

    public function show(Categorie $categorie){
        $plats = $categorie->plats;
        $categories = Categorie::all();
        return view('dashboard', compact('plats', 'categories', 'categorie'));
    }
}
