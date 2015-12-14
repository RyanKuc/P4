<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {

          # columns for recipes table
          $table->increments('id');
          $table->timestamps();
          $table->string('title',50);
          $table->string('picture_link');
          $table->string('description',200);
          $table->text('ingredients');
          $table->text('instructions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recipes');
    }
}
