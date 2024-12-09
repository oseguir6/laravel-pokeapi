<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiderGim extends Model
{
    public function generacion()
    {
        return $this->belongsTo(Generacions::class);
    }
}
