<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandModelsGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_model_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->foreignId('brand_id')->constrained('brands');
            $table->foreignId('brand_model_id')->constrained('brand_models');
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
        Schema::dropIfExists('brand_model_groups');
    }
}
