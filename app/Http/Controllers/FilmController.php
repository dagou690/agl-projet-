<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\Film;
use App\Models\Realisateur;
use App\Models\Producteur;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    // Méthode pour afficher le formulaire de création
    public function create()
    {
        return view('jury.enregistrement_film');
    }

    // Méthode pour enregistrer un nouveau film
    public function store(Request $request)
{
    // Validation des données
    $validated = $request->validate([
        'code_film' => 'required|unique:films,code',
        'titre' => 'required',
        'date_sortie' => 'required|date',
        'sujet' => 'required',
        'code_realisateur' => 'required',
        'nom_realisateur' => 'required_if:code_realisateur,new',
        'prenom_realisateur' => 'required_if:code_realisateur,new',
        'date_naissance_realisateur' => 'required_if:code_realisateur,new|date',
        'code_producteur' => 'required',
        'nom_producteur' => 'required_if:code_producteur,new',
        'prenom_producteur' => 'required_if:code_producteur,new',
        'date_naissance_producteur' => 'required_if:code_producteur,new|date',
        'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Gestion du réalisateur
    $realisateur = Realisateur::create([
        'code' => $request->input('code_realisateur'),
        'nom' => $request->input('nom_realisateur'),
        'prenom' => $request->input('prenom_realisateur'),
        'date_naissance' => $request->input('date_naissance_realisateur'),
    ]);

    // Gestion du producteur
    $producteur = Producteur::firstOrCreate(
        ['code' => $request->input('code_producteur')],
        [
            'nom' => $request->input('nom_producteur'),
            'prenom' => $request->input('prenom_producteur'),
            'date_naissance' => $request->input('date_naissance_producteur'),
        ]
    );

    // Gestion de l'image
    $imagePath = null;
    if ($request->hasFile('cover')) {
        $imagePath = $request->file('cover')->store('covers', 'public');
    }

    // Création du film
    Film::create([
        'code' => $request->input('code_film'),
        'titre' => $request->input('titre'),
        'date_sortie' => $request->input('date_sortie'),
        'sujet' => $request->input('sujet'),
        'realisateur_id' => $realisateur->id,
        'producteur_id' => $producteur->id,
        'cover' => $imagePath,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Redirection avec message de succès
    return redirect()->route('film.create')->with('success', 'Film enregistré avec succès');
}
public function destroy(Film $film)
{
    try {
        // Supprimer l'image si elle existe
        if ($film->cover && Storage::exists('public/' . $film->cover)) {
            Storage::delete('public/' . $film->cover);
        }

        // Supprimer le film
        $film->delete();

        return redirect()->route('jury.films')->with('success', 'Le film a été supprimé avec succès.');
    } catch (\Exception $e) {
        return redirect()->route('jury.films')->with('error', 'Une erreur est survenue lors de la suppression : ' . $e->getMessage());
    }
}




    
}
