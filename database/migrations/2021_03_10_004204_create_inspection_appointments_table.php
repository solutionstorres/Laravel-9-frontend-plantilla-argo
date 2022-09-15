<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_appointments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('addresses');

            $table->unsignedBigInteger('automobile_id');
            $table->foreign('automobile_id')->references('id')->on('automobiles');

            $table->unsignedBigInteger('insurance_carrier_id');
            $table->foreign('insurance_carrier_id')->references('id')->on('insurance_carriers');

            $table->unsignedBigInteger('inspection_survey_id');
            $table->foreign('inspection_survey_id')->references('id')->on('inspection_surveys');

            $table->unsignedBigInteger('inspector_id')->nullable();
            $table->foreign('inspector_id')->references('id')->on('inspectors');

            $table->timestamp('scheduled_for');
            $table->integer('urgency_level');
            $table->integer('status');
            $table->float('base_reward_amount');
            $table->float('max_reward_amount');
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
        Schema::dropIfExists('inspection_appointments');
    }
}
