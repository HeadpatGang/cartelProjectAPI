<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatheringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gathering', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('discordID')->unsigned();
            $table->integer('logging')->nullable();
            $table->integer('mining')->nullable();
            $table->integer('fishing')->nullable();
            $table->integer('harvesting')->nullable();
            $table->integer('skinning')->nullable();
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
        Schema::dropIfExists('gathering');
    }
}
