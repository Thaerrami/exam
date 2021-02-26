<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('exams')){

        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('exam_name')->unique();
            $table->date('exam_date');
            $table->time('start_at');
            $table->time('end_at');
            $table->string('exam_code');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_tables');
    }
}
