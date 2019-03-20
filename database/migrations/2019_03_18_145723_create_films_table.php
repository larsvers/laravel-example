<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->integer('release_year');
            $table->integer('budget');
            $table->integer('revenue');
            $table->float('popularity');
            $table->float('vote_average');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
