<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $membres = Membre::all();
        $femmes = Membre::where('genre', 'Femme')->get();
        $hommes = Membre::where('genre', 'Homme')->get();
        $hommesConditions = Membre::whereBetween('age', [18, 24]) 
        -> where ('genre', 'Homme') 
        ->get();
        $femmesConditions = Membre::whereBetween('age', [18, 24]) 
        -> where ('genre', 'Femme') 
        ->get();
        $horsConditions = Membre::whereNotBetween ('age', [18,24])
        ->get();

        return view ('home', compact ('membres','hommes', 'femmes', 'hommesConditions', 'femmesConditions', 'horsConditions'));
    }
}
