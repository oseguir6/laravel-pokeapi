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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->float("alçada",8,2);
            $table->float("pes",8,2);
            $table->integer("hp");
            $table->integer("atac");
            $table->integer("atac-esp");
            $table->integer("def-esp");
            $table->integer("velocitat");
            $table->string("descripcio");
            $table->string("sprite");    
            $table->string("sprite_shiny");
            $table->integer("gen_id");   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
};

