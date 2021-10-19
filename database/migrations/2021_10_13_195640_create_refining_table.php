<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefiningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refining', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('discordID')->unsigned();
            $table->integer('smelting')->nullable();
            $table->integer('woodworking')->nullable();
            $table->integer('leatherworking')->nullable();
            $table->integer('weaving')->nullable();
            $table->integer('stonecutting')->nullable();
            $table->foreign('discordID')->references('discordID')->on('crafters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refining');
    }
}
