<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contestant_id', false);
            $table->unsignedBigInteger('vying_for', false);
            $table->unsignedBigInteger('no_of_votes');
            $table->timestamps();

            $table->foreign('vying_for')->references('id')->on('positions');
            $table->foreign('contestant_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contestants');
    }
}