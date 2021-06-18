<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VideoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Video', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Author');
            $table->foreign('Author')->references('id')->on('users');
            $table->string('Title');
            $table->string('Description');
            $table->text('Video_link');
            $table->timestamps();
            $table->unsignedBigInteger('Views')->default(0);
        });

        Schema::create('Video_Comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Post');
            $table->foreign('Post')->references('id')->on('Video');
            $table->unsignedBigInteger('Author');
            $table->foreign('Author')->references('id')->on('users');
            $table->text('Message');
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
        Schema::dropIfExists('Video_Comments');
        Schema::dropIfExists('Video');
    }
}
