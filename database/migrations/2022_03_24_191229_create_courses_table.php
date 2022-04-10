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
            $table->integer('department_id');
            $table->integer('doctor_id');
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
