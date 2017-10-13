<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_complains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->nullable(false);
            $table->string('std_id', 30)->nullable(false);
            $table->string('room', 30)->nullable(false);
            $table->string('complain', 5000)->nullable(false);
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
        Schema::dropIfExists('student_complains');
    }
}
