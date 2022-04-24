<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('doctor_id');
            $table->string('image');
            $table->string('vedio');
            $table->integer('no_of_student');
            $table->integer('training_hours');
            $table->string('place');
            $table->string('description');
            $table->integer('content_id');
            $table->integer('price');
            $table->integer('Accreditation_id');
            $table->string('date');
            $table->timestamps();
            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('doctor_id')->references('id')->on('doctor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
