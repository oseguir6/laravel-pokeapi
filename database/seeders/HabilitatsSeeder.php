<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilitatsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habilitats')->insert([
            'nom' => 'Mar Llamas',
            'pokemon_id' => '1',
            'descripcio' => 'Augmenta la potencia dels atacs de tipus foc quan els PS estan per sota de un terç.',
            'oculta' => 'No',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('habilitats')->insert([
            'nom' => 'Poder Solar',
            'pokemon_id' => '1',
            'descripcio' => 'Augmenta el atac especial en climes assolellats, però perd PS a cada torn.',
            'oculta' => 'Sí',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
