<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_user', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('title_id');
            $table->unsignedInteger('user_id');
            $table->unsignedTinyInteger('user_list_id')->nullable();
            $table->unsignedTinyInteger('user_rating')->default(0);
            $table->string('user_channel', 45)->nullable();
            $table->unsignedTinyInteger('last_season')->nullable();
            $table->unsignedTinyInteger('last_episode')->nullable();
            $table->mediumText('note')->nullable();
            $table->boolean('user_trash')->default(false);
            $table->timestamps();

            $table->unique(['title_id', 'user_id']);
            $table->foreign('title_id')->on('titles')->references('id')->cascadeOnDelete();
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreign('user_list_id')->on('user_list')->references('id')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('title_user');
    }
};
