<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projection extends Model
{
    use HasFactory;

    protected $fillable = ['film_id', 'jour', 'heure', 'lieu'];

    /**
     * Une projection est liée à un seul film.
     */
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}

