<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['film_id', 'jury_member_id', 'note'];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function juryMember()
    {
        return $this->belongsTo(JuryMember::class);
    }
}
