<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokeAtacs extends Model
{
    protected $table = 'poke-atacs';

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }

    public function atac()
    {
        return $this->belongsTo(Atac::class);
    }
}
