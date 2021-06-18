<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class RecipesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Recipe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Author');
            $table->foreign('Author')->references('id')->on('users');
            $table->string('Title');
            $table->string('Description');
            $table->text('Content');
            $table->string('Photo');
            $table->timestamps();
            $table->unsignedBigInteger('Views')->default(0);
        });

        Schema::create('Recipe_Comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Post');
            $table->foreign('Post')->references('id')->on('Recipe');
            $table->unsignedBigInteger('Author');
            $table->foreign('Author')->references('id')->on('users');
            $table->text('Message');
            $table->timestamps();
        });

        Schema::create('Recipe_Ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Rating');
            $table->unsignedBigInteger('Post');
            $table->foreign('Post')->references('id')->on('Recipe');
            $table->unsignedBigInteger('Author');
            $table->foreign('Author')->references('id')->on('users');
        });

        Schema::create('Ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Description');
            $table->unsignedBigInteger('Price');
        });

        Schema::create('Ingredient_List', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Ingredient');
            $table->foreign('Ingredient')->references('id')->on('Ingredients');
            $table->unsignedBigInteger('Recipe');
            $table->foreign('Recipe')->references('id')->on('Recipe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ingredient_List');
        Schema::dropIfExists('Ingredients');
        Schema::dropIfExists('Recipe_Ratings');
        Schema::dropIfExists('Recipe_Comments');
        Schema::dropIfExists('Recipe');
    }
}
