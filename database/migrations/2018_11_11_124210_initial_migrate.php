<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('games',function (Blueprint $table){
        $table->increments('id');
        $table->timestamps();
        $table->double('prize');
      });
      Schema::create('entries',function (Blueprint $table){
        $table->increments('id');
        $table->unsignedInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        $table->unsignedInteger('game_id');
        $table->foreign('game_id')->references('id')->on('games');
        $table->json('made');//card id로 바꾸는것도 생각
        $table->timestamps();
        $table->double('prize');
      });

    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('games');
      Schema::dropIfExists('entries');
    }
}
