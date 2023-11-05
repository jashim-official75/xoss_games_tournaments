<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamePrizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_prizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tournament_game_id');
            $table->string('prize_name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->integer('position')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('game_prizes');
    }
}
