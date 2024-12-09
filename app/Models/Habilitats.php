<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilitats extends Model
{
    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
