<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automobiles', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->string('plaque');
            $table->integer('year');

            //Marca ->        Chevrolet
            $table->foreignId('brand_id')->constrained('brands');

            //Modelo ->       Avalanche | Blazer
            $table->foreignId('brand_model_id')->constrained('brand_models');

            //Agrupación ->   Livianos  | Livianos  **O pesados...
           // $table->foreignId('brand_model_group_id')->constrained('brand_model_groups');

            //Tipo ->         Camioneta | Jeep
            //$table->foreignId('brand_model_type_id')->constrained('brand_model_types');
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('automobiles');
    }
}
