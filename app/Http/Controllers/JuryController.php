<?php

namespace App\Http\Controllers;

use App\Models\Film; // Assurez-vous d'importer le modèle Film si vous l'utilisez

class JuryController extends Controller
{
    public function films()
    {
        // Récupérer les films, par exemple avec Eloquent
        $films = Film::all(); // Cela récupère tous les films de la base de données

        // Passer la variable $films à la vue
        return view('jury.films', compact('films'));  // Ou vous pouvez utiliser ['films' => $films]
    }
}
