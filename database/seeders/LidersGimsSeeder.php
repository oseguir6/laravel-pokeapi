<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LidersGimsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Brock (Primera Generación, Kanto)
        DB::table('liders__gims')->insert([
            'nom' => 'Brock',
            'gen_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Misty (Primera Generación, Kanto)
        DB::table('liders__gims')->insert([
            'nom' => 'Misty',
            'gen_id' => 1, 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Norman (Tercera Generación, Hoenn)
        DB::table('liders__gims')->insert([
            'nom' => 'Norman',
            'gen_id' => 3, 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Volkner (Cuarta Generación, Sinnoh)
        DB::table('liders__gims')->insert([
            'nom' => 'Volkner',
            'gen_id' => 4, 
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
