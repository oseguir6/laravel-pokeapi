<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PokemonSeeder::class,
            TipusesSeeder::class,
            AtacsSeeder::class,
            EvolucionsSeeder::class,
            GeneracionsSeeder::class,
            HabilitatsSeeder::class,
            LidersGimsSeeder::class,
            ObjectesSeeder::class,
            PokeAtacsSeeder::class,
            Tipus_psSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
