<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');

            $table->string('name',50)->comment('nickname');
            $table->integer('gender')->default(1)->comment('1-unknown 2-man 3-woman');
            $table->string('account', 100)->nullable();
            $table->string('phone', 100)->nullable()->comment('user phone number');
            $table->string('email')->nullable()->comment('user email address');
            $table->string('jwt', 100)->nullable()->comment('json web token');
            $table->integer('status')->default(1)->comment('1-online -1-offline');
            $table->string('password')->nullable();

            $table->index('name');
            $table->index('phone');
            $table->index('account');
            $table->index('email');
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
