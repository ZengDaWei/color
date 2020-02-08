<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');

            $table->string('name', 255)->nullable();
            $table->string('ip', 100)->nullable();
            $table->string('os', 100)->nullable();
            $table->string('version', 100)->nullable();
            $table->string('position', 255)->nullable();
            $table->string('uuid', 255)->nullable();

            $table->index('user_id');
            $table->index('uuid');

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
        Schema::dropIfExists('devices');
    }
}
