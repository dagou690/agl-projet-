<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Realisateur extends Model {
    protected $fillable = ['code', 'nom', 'prenom', 'date_naissance'];

    public function films() {
        return $this->hasMany(Film::class);
    }
}
