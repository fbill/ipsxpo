<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('users');
            $table->unsignedInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('users');
            $table->dateTime('send_date');
            $table->unsignedInteger('p_order_status_id');
            $table->foreign('p_order_status_id')->references('id')->on('p_order_status');
            $table->dateTime('arrival_date');
            $table->decimal('shipping_costs', 8, 2);
            $table->decimal('taxes', 8, 2);
            $table->dateTime('payment_date');
            $table->decimal('payment_amount', 8, 2);
            $table->enum('pay_mode', ['credit card', 'counted','check']);
            $table->unsignedInteger('approved_id');
            $table->dateTime('approved_date');
            $table->string('invoice_purchase');
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
        Schema::dropIfExists('purchase_orders');
    }
}
