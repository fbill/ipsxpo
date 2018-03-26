<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastName')->default('');
            //$table->string('iduser')->unique();
            $table->string('password');
            $table->string('dni',11)->default('');
            $table->string('ruc',11)->default('');
            $table->string('phone',11)->default('');
            $table->string('cel',11)->default('');
            $table->string('company',11)->default('');
            $table->string('email')->unique();
            $table->string('country')->default('');
            $table->string('address')->default('');
            $table->string('position')->default('');
            $table->string('web')->default('');
            //$table->timestamp('birthday');
            $table->boolean('active')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
