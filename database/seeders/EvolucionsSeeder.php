<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvolucionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evolucions')->insert([
            'id-poke' => 1, // Charmander
            'id-poke-ev' => 2, // Charmeleon
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('evolucions')->insert([
            'id-poke' => 2, // Charmeleon
            'id-poke-ev' => 3, // Charizard
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
