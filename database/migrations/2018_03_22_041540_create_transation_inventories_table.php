<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransationInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transation_inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('transationType_id');
            $table->foreign('transationType_id')->references('id')->on('transation_types');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('purcharseOrder_id');
            $table->foreign('purcharseOrder_id')->references('id')->on('purchase_orders');
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->string('comments');
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
        Schema::dropIfExists('transation_inventories');
    }
}
