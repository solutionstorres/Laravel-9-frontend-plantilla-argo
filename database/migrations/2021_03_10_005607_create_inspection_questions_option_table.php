<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionQuestionsOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_questions_option', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inspection_question_id');
            $table->foreign('inspection_question_id')->references('id')->on('inspection_questions');

            $table->string('option_text');

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
        Schema::dropIfExists('inspection_questions_option');
    }
}
