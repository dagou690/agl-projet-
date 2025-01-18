<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_id',        // ID du film
        'note_finale',    // Note finale attribuée par le président
        'president_id',   // ID du président du jury
    ];

    // Relation avec le modèle Film
    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    // Relation avec le modèle JuryMember (président du jury)
    public function president()
    {
        return $this->belongsTo(JuryMember::class, 'president_id');
    }
}
