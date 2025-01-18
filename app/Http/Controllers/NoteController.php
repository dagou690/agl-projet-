<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Film;
use App\Models\JuryMember;
use Illuminate\Http\Request;
use App\Models\FinalNote;

class NoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'film_id' => 'required|exists:films,id',
            'jury_member_id' => 'required|exists:jury_members,id',
            'note' => 'required|integer|min:0|max:10',
        ]);

        Note::create($validated);

        return redirect()->route('notes.index')->with('success', 'Note ajoutée avec succès.');
    }

    public function indexByFilm($filmId)
    {
        if (!Film::find($filmId)) {
            return response()->json(['error' => 'Film introuvable'], 404);
        }

        $notes = Note::where('film_id', $filmId)
            ->with(['film', 'juryMember'])
            ->get();

        return response()->json($notes);
    }

    public function viewNotes()
    {
        $notes = Note::with(['film', 'juryMember'])->paginate(10);
        return view('notes.index', compact('notes'));
    }

    public function createNote()
    {
        $films = Film::all();
        $juryMembers = JuryMember::all();

        if ($films->isEmpty() || $juryMembers->isEmpty()) {
            return redirect()->route('notes.index')->with('error', 'Aucun film ou membre du jury disponible.');
        }

        return view('notes.create', compact('films', 'juryMembers'));
    }
    public function listFilmsForJury()
{
    $films = Film::all(); // Récupérer tous les films
    return view('jury.films', compact('films'));
}

public function submitNote(Request $request, Film $film)
{
    $validated = $request->validate([
        'note' => 'required|integer|min:0|max:10', // Note entre 0 et 10
    ]);

    Note::create([
        'film_id' => $film->id,
      

        'note' => $validated['note'],
    ]);

    return redirect()->route('jury.films')->with('success', 'Note enregistrée avec succès.');
}
public function viewNotesForValidation()
{
    $films = Film::with('notes')->get(); // Charger les films avec leurs notes
    return view('president.notes', compact('films'));
}

public function validateFinalNote(Request $request, Film $film)
{
    $validated = $request->validate([
        'note_finale' => 'required|integer|min:0|max:10', // Note finale entre 0 et 10
    ]);

    // Enregistrement de la note finale
    FinalNote::create([
        'film_id' => $film->id,
        'note_finale' => $validated['note_finale'],
        
        
    ]);

    return redirect()->route('president.notes')->with('success', 'Note finale enregistrée avec succès.');
}



}

