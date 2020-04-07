<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('club_id')->unsigned();
            $table->bigInteger('day_id')->unsigned();
            $table->time('time_start');
            $table->time('time_end');

            $table->foreign('club_id')
                ->references('id')->on('clubs')->onDelete('cascade');
            $table->foreign('day_id')
                ->references('id')->on('days')->onDelete('cascade');
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
        Schema::dropIfExists('exercises');
    }
}
