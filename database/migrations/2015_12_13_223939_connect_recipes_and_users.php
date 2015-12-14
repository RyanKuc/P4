<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectRecipesAndUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #adjust the recipes table to add a new foreign key for users and establish rel
        Schema::table('recipes', function(Blueprint $table) {

          $table->integer('user_id')->unsigned();

          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        #drop the foreign key column and rel
        Schema::table('recipes', function (Blueprint $table) {

          $table->dropForeign('recipes_user_id_foreign');

          $table->dropColumn('user_id');
        });
    }
}
