<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// @codingStandardsIgnoreLine
class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nationality');
            $table->string('gender');
            $table->date('DoB');
            $table->integer('contact_id');
            $table->string('current_add');
            $table->string('request');
            $table->string('exp');
            $table->string('location');
            $table->integer('condition_id');
            $table->integer('user_id');
            $table->integer('candidate_like_id');
            $table->integer('candidate_dislike_id');
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
        Schema::dropIfExists('candidates');
    }
}
