<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneracionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generacions')->insert([
            'nom' => 'Primera Generació',
            'regio' => 'Kanto',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('generacions')->insert([
            'nom' => 'Segona Generació',
            'regio' => 'Johto',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('generacions')->insert([
            'nom' => 'Tercera Generació',
            'regio' => 'Hoenn',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('generacions')->insert([
            'nom' => 'Cuarta Generació',
            'regio' => 'Sinnoh',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
