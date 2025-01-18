<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Afficher le formulaire de contact
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'sujet' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Enregistrer dans la base de données
        Contact::create($validated);

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
