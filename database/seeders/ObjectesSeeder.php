<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Objeto 1: Pokéball
        DB::table('objectes')->insert([
            'nom' => 'Pokéball',
            'descripcio' => 'Una Poké Ball básica utilitzada per capturar pokemons.',
            'sprite' => 'C:/Users/oriol/Desktop/SUPERIOR 2/SERVEIS-I-XARXA/pokemons/pokemons-images/sprites/revivir.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Objeto 2: Superpoción
        DB::table('objectes')->insert([
            'nom' => 'Superpoción',
            'descripcio' => 'Restaura 50 PS de un Pokémon.',
            'sprite' => 'C:/Users/oriol/Desktop/SUPERIOR 2/SERVEIS-I-XARXA/pokemons/pokemons-images/sprites/revivir.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Objeto 3: Revivir
        DB::table('objectes')->insert([
            'nom' => 'Revivir',
            'descripcio' => 'Restaura a un Pokémon debilitat amb la meitat del eu PS.',
            'sprite' => 'C:/Users/oriol/Desktop/SUPERIOR 2/SERVEIS-I-XARXA/pokemons/pokemons-images/sprites/revivir.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
