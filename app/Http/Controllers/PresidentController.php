<?php

namespace App\Http\Controllers;

use App\Models\Film;  // Assurez-vous d'importer le modèle Film si nécessaire

class PresidentController extends Controller
{
    public function showNotes()
    {
        // Récupérer les films depuis la base de données
        $films = Film::all();  // Cela récupère tous les films, mais vous pouvez ajuster la requête selon vos besoins

        // Passer la variable $films à la vue
        return view('president.notes', compact('films'));
    }
}
