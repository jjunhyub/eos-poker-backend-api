<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
          $table->unsignedInteger('winner_id')->nullable();
          $table->foreign('winner_id')->references('id')->on('users');
          $table->json('winner_made')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('games', function (Blueprint $table) {
        $table->dropForeign(['winner_id']);
        $table->dropColumn('winner_id');
        $table->dropColumn('winner_made');
      });
    }
}
