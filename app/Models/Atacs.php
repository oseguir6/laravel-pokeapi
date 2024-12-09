<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Atacs extends Model
{
    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class, 'poke-atacs', 'id-atacs', 'id-poke');
    }
}

