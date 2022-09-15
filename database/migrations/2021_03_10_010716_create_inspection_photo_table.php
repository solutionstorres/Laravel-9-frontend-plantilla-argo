<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_photo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inspection_response_id')->nullable();
            $table->foreign('inspection_response_id')->references('id')->on('inspection_responses');

            $table->string('label')->nullable();

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
        Schema::dropIfExists('inspection_photo');
    }
}
