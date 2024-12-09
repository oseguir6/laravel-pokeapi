<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generacions extends Model
{
    public function pokemons()
    {
        return $this->belongsTo(Pokemon::class); 
    }
}

class LiderGim extends Model
{
    public function generacions()
    {
        return $this->hasToMany(Tipus::class);
    }
}