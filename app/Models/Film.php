<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'date', 'sujet', 'realisateur_id', 'producteur_id'];

    public function realisateur()
    {
        return $this->belongsTo(Realisateur::class);
    }

    public function producteur()
    {
        return $this->belongsTo(Producteur::class);
    }

    public function projections()
    {
        return $this->hasMany(Projection::class);
    }
}
