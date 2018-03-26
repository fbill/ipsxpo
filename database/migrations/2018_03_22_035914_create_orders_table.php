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
            $table->unsignedInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('users');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users');
            $table->dateTime('shipping_date');
            $table->unsignedInteger('carrier_id');
            $table->string('destination_address');
            $table->string('destination_city');
            $table->string('destination_state');
            $table->string('destination_country');
            $table->decimal('shipping_cost', 8, 2);
            $table->decimal('taxes', 8, 2);
            $table->unsignedInteger('order_status_id');
            $table->foreign('order_status_id')->references('id')->on('order_status');
            $table->string('comment');
            $table->string('listend');
            $table->string('budget');
            $table->string('data');
            $table->unsignedInteger('language_id');
            $table->boolean('need_shipping');
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
