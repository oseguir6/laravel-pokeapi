<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokeAtacsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $charmanderId = 1;

        DB::table('poke-atacs')->insert([
            'id-poke' => $charmanderId,
            'id-atacs' => 1, 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('poke-atacs')->insert([
            'id-poke' => $charmanderId,
            'id-atacs' => 2, 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('poke-atacs')->insert([
            'id-poke' => $charmanderId,
            'id-atacs' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('poke-atacs')->insert([
            'id-poke' => $charmanderId,
            'id-atacs' => 4, 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Agrega más relaciones de ataques si es necesario
    }
}
