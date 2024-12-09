<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipus extends Model
{
    public function tipus_ps()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
