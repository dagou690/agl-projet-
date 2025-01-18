<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function index()
    {
        // Vérification si l'utilisateur est connecté et si son rôle est 'admin'
        if (Auth::check() && Auth::user()->role !== 'admin') {
            return redirect('/')->with('error', 'Accès non autorisé !');
        }

        // Récupère tous les utilisateurs si l'utilisateur est un admin
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function modifierRole($id, Request $request)
    {
        // Vérification si l'utilisateur est connecté et si son rôle est 'admin'
        if (Auth::check() && Auth::user()->role !== 'admin') {
            return redirect('/')->with('error', 'Accès non autorisé !');
        }

        // Mise à jour du rôle d'un utilisateur
        $user = User::findOrFail($id);
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Rôle mis à jour avec succès');
    }

    public function detruire($id)
    {
        // Vérification si l'utilisateur est connecté et si son rôle est 'admin'
        if (Auth::check() && Auth::user()->role !== 'admin') {
            return redirect('/')->with('error', 'Accès non autorisé !');
        }

        // Suppression d'un utilisateur
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'Utilisateur supprimé avec succès');
    }
    public function create()
{
    // Vérifie que l'utilisateur est admin
    if (Auth::check() && Auth::user()->role !== 'admin') {
        return redirect('/')->with('error', 'Accès non autorisé !');
    }

    return view('admin.create'); // Affiche le formulaire pour ajouter un utilisateur
}

public function store(Request $request)
{
    // Vérifie que l'utilisateur est admin
    if (Auth::check() && Auth::user()->role !== 'admin') {
        return redirect('/')->with('error', 'Accès non autorisé !');
    }

    // Validation des données
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'role' => 'required|in:admin,user,responsable_production', // S'assurer que le rôle est valide
    ]);

    // Création de l'utilisateur
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => $request->role,
    ]);

    return redirect()->route('admin.users')->with('success', 'Utilisateur ajouté avec succès');
}
}
