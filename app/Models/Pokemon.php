<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pokemon extends Model
{
    public function atacs()
    {
        return $this->belongsToMany(Atacs::class, 'poke-atacs', 'id-poke', 'id-atacs');
    }

    public function evolucio()
    {
        return $this->hasMany(Evolucions::class);
    }
    public function habilitats()
    {
        return $this->hasMany(Habilitats::class);
    }
    public function generacions()
    {
        return $this->belongsToMany(Generacions::class);
    }
    public function tipus()
    {
        return $this->belongsToMany(Tipus::class);
    }

}
// falta lider gym, 


