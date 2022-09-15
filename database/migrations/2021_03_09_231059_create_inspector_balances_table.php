<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectorBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspector_balances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inspector_id')->nullable();
            $table->foreign('inspector_id')->references('id')->on('inspectors');
            $table->integer('transaction_type');
            $table->decimal('transaction_amount',18,2);
            $table->decimal('balance_to_date',18,2);
            $table->timestamp('date');
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
        Schema::dropIfExists('inspector_balances');
    }
}
