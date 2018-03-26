<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('origin_port_id');
            $table->foreign('origin_port_id')->references('id')->on('ports');
            $table->unsignedInteger('destination_port_id');
            $table->foreign('destination_port_id')->references('id')->on('ports');
            $table->decimal('price',8,2);
            $table->unsignedInteger('shipping_type_id');
            $table->foreign('shipping_type_id')->references('id')->on('shipping_types');
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
        Schema::dropIfExists('quotations');
    }
}
