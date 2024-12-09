<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert([
            'id' => 1,
            'nom' => 'Charmander',
            'alçada' => 0.6, 
            'pes' => 8.5,    
            'hp' => 39,    
            'atac' => 52, 
            'atac-esp' => 60, 
            'def-esp' => 50, 
            'velocitat' => 65, 
            'descripcio' => 'Pokemon de foc i crema boscos.',
            'sprite' => 'Charmander.png', 
            'sprite_shiny' => 'Charmander_shiny.png', 
            'gen_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
            
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
