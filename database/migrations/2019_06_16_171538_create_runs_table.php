<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('day_id');
            $table->unsignedInteger('duration_hours');
            $table->unsignedInteger('duration_minutes');
            $table->unsignedInteger('miles');
            $table->unsignedInteger('average_pace_minutes');
            $table->unsignedInteger('average_pace_seconds');
            $table->string('location');
            $table->string('prerun_nutrition');
            $table->string('run_nutrition');
            $table->string('postrun_nutrition');
            $table->time('start_time');
            $table->string('details');
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
        Schema::dropIfExists('runs');
    }
}
