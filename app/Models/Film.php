<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    // Définir les colonnes qui peuvent être remplies automatiquement
    protected $fillable = ['code','titre', 'date_sortie', 'sujet', 'realisateur_id', 'producteur_id','cover'];

    // Relation avec le modèle Réalisateur
    public function realisateur()
    {
        return $this->belongsTo(Realisateur::class);
    }

    // Relation avec le modèle Producteur
    public function producteur()
    {
        return $this->belongsTo(Producteur::class);
    }
    public function notes()
    {
        return $this->hasMany(Note::class);  // Assurez-vous que le modèle Note existe
    }
}

