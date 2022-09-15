<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inspection_survey_id');
            $table->foreign('inspection_survey_id')->references('id')->on('inspection_surveys');

            $table->unsignedBigInteger('question_type_id');
            $table->foreign('question_type_id')->references('id')->on('question_types');

            $table->string('question_text');
            $table->bigInteger('auto_part')->nullable();

            $table->integer('order');

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
        Schema::dropIfExists('inspection_questions');
    }
}
