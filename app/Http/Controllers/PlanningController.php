<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projection;
use App\Models\Film;

class PlanningController extends Controller
{
    public function index()
    {
        $projections = Projection::with('film')->get();
        return view('planning.index', compact('projections'));
    }

    public function create()
    {
        $films = Film::all();
        return view('planning.create', compact('films'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'film_id' => 'required|exists:films,id',
            'jour' => 'required|date',
            'heure' => 'required|date_format:H:i',
            'lieu' => 'required|string|max:255',
        ]);

        Projection::create($validated);

        return redirect()->route('planning.index')->with('success', 'Projection ajoutée avec succès !');
    }
}
