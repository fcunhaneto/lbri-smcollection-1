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
        Schema::create('creator_title', function (Blueprint $table) {
            $table->unsignedInteger('title_id');
            $table->unsignedInteger('creator_id');

            $table->primary(['title_id', 'creator_id']);
            $table->foreign('creator_id')->on('creators')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('creator_title');
    }
};
