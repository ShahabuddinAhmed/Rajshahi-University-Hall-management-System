<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_models', function (Blueprint $table) {
            $table->string('id', 30)->nullable(false);
            $table->string('name', 30)->nullable(false);
            $table->string('dept', 30)->nullable(false);
            $table->string('year', 30)->nullable(false);
            $table->string('session', 30)->nullable(false);
            $table->string('room', 30)->nullable(false);
            $table->string('address', 30)->nullable(false);
            $table->string('mobile', 30)->nullable(false);
            $table->string('roomType', 30)->nullable(false);
            $table->string('birthDay', 30)->nullable(false);
            $table->string('password', 30)->nullable(false);
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
        Schema::dropIfExists('student_models');
    }
}
