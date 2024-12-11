<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
class AuthController extends Controller
{
    public function pageconnexion()
    {
        return view('connexion');
    }

    
    

    public function register(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
    ]);

    // Vérifier si l'email existe déjà
    if (User::where('email', $request->email)->exists()) {
      return redirect()->route('connexion')->with('success', 'Inscription réussie. Veuillez vous connecter.');
    }

    // Créer un nouvel utilisateur
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    return back()->with('success', 'Enregistré avec succès !');
}

    
    
    public function login(Request $request)
{
    // Validation des champs
    $request->validate([
        'email' => 'required|email',  // Vérifie que l'email est valide
        'password' => 'required|min:6', // Vérifie que le mot de passe a au moins 6 caractères
    ]);

   
    if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();
        return redirect()->route('welcome'); // Changez 'accueil' en la route de votre page principale
    }

    return back()->withErrors([
        'email' => 'Les identifiants sont incorrects. Veuillez vous inscrire si vous n\'avez pas de compte.',
    ]);
}
public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('connexion.form')->with('success', 'Vous avez été déconnecté.');
    }
}
