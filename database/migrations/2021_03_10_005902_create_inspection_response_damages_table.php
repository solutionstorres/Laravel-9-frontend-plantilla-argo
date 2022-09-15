<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionResponseDamagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_response_damages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inspection_response_id');
            $table->foreign('inspection_response_id')->references('id')->on('inspection_responses');

            $table->unsignedBigInteger('damage_type_id');
            $table->foreign('damage_type_id')->references('id')->on('damage_types');

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
        Schema::dropIfExists('inspection_response_damages');
    }
}
