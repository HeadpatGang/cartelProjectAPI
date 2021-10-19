<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCraftingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crafting', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('discordID')->unsigned();
            $table->integer('weaponsmithing')->nullable();
            $table->integer('armoring')->nullable();
            $table->integer('engineering')->nullable();
            $table->integer('jewelcrafting')->nullable();
            $table->integer('arcana')->nullable();
            $table->integer('cooking')->nullable();
            $table->integer('furnishing')->nullable();
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
        Schema::dropIfExists('crafting');
    }
}
