<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisateur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'date_naissance'];

    /**
     * Un réalisateur peut être lié à plusieurs films.
     */
    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
