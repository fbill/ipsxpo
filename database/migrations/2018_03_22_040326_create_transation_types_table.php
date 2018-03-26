<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transation_types', function (Blueprint $table) {
            $table->integer('id')->unsigned()->nullable(false);
            $table->string('fullname');
            $table->integer('languages_id')->unsigned()->nullable(false);
            $table->primary(['id', 'languages_id']);
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
        Schema::dropIfExists('transation_types');
    }
}
