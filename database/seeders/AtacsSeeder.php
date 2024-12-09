<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtacsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atacs')->insert([
            'nom' => 'Llamarada',
            'pp\'s' => 5,
            'presicio' => 85,
            'potencia' => 110,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('atacs')->insert([
            'nom' => 'Garra de Dragón',
            'pp\'s' => 15,
            'presicio' => 100,
            'potencia' => 80,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('atacs')->insert([
            'nom' => 'Lanzallamas',
            'pp\'s' => 15,
            'presicio' => 100,
            'potencia' => 90,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('atacs')->insert([
            'nom' => 'Ascuas',
            'pp\'s' => 25,
            'presicio' => 100,
            'potencia' => 40,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}

