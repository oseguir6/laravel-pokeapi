<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolucions extends Model
{
    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class, 'id-poke'); // Relación inversa: la evolución pertenece a un Pokémon
    }

    public function evolucionat()
    {
        return $this->belongsTo(Pokemon::class, 'id-poke-ev'); // Relaciona al Pokémon evolucionado
    }
}