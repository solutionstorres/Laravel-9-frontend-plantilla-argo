<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_responses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('inspection_id');
            $table->foreign('inspection_id')->references('id')->on('inspections');

            $table->unsignedBigInteger('inspection_question_id');
            $table->foreign('inspection_question_id')->references('id')->on('inspection_questions');

            $table->unsignedBigInteger('inspection_questions_option_id')->nullable();
            $table->foreign('inspection_questions_option_id')->references('id')->on('inspection_questions_option');

            $table->string('response_text')->nullable();
            $table->integer('damage_level')->nullable();

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
        Schema::dropIfExists('inspection_responses');
    }
}
