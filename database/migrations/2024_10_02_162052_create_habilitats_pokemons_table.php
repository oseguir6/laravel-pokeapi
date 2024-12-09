<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('habilitats_pokemon')) {
            Schema::create('habilitats_pokemon', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('habilitats_id');
                $table->unsignedBigInteger('pokemon_id');
                $table->timestamps();
            });
        }
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habilitats_pokemons');
    }
};
