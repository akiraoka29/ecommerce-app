<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->unsignedBigInteger('order_id');
            $table->string('payment_method');
            $table->decimal('amount', 10, 2);
            $table->date('payment_date');
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
