<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->unsigned()->index();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->integer('course_class_id')->unsigned()->index();
            $table->foreign('course_class_id')->references('id')->on('course_classes')->onDelete('cascade');
            $table->integer('discipline_id')->unsigned()->index();
            $table->foreign('discipline_id')->references('id')->on('disciplines')->onDelete('cascade');
            $table->time('starts_at');
            $table->time('ends_at');
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
        Schema::dropIfExists('grades');
    }
}
