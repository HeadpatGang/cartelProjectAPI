<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCraftersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crafters', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('discordID')->unsigned();
            $table->string('discordName');
            $table->string('playerName');
            $table->string('timeOfContact');
            $table->string('materialsOfUse');
            $table->string('crafterPronouns');
            $table->primary('discordID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crafters');
    }
}
