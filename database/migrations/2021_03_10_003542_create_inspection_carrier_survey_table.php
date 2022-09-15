<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionCarrierSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_carrier_survey', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('insurance_carrier_id');
            $table->foreign('insurance_carrier_id')->references('id')->on('insurance_carriers');
            $table->unsignedBigInteger('inspection_survey_id');
            $table->foreign('inspection_survey_id')->references('id')->on('inspection_surveys');
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
        Schema::dropIfExists('inspection_carrier_survey');
    }
}
