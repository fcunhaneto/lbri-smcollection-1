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
        Schema::create('cast', function (Blueprint $table) {
            $table->unsignedInteger('title_id');
            $table->unsignedInteger('actor_id');
            $table->unsignedInteger('character_id');

            $table->foreign('character_id')->on('characters')->references('id')->cascadeOnDelete();
            $table->foreign('actor_id')->on('actors')->references('id')->cascadeOnDelete();
            $table->foreign('title_id')->on('titles')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cast');
    }
};
