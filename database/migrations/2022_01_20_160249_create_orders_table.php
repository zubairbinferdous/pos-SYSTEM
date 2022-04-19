<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->increments('id');
            $table->string('order_status');
            $table->string('total_products');
            $table->string('sub_total');
            $table->string('payment_status');
            $table->string('pay');
            $table->string('due');
            $table->string('size');
            $table->string('Customar_name');
            $table->string('Customar_email');
            $table->string('Customar_phone');
            $table->string('month')->nullable();
            $table->string('date')->nullable();
            $table->string('year')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
