<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->unique()->comment('用户ID');

            $table->string('address')->nullable()->comment('用户位置信息');
            $table->string('ip', 100);
            $table->string('source', 30)->index()->default('unknown')->comment('来源');
            $table->string('introduction')->default('')->comment('介绍');
            $table->timestamp('birthday')->nullable()->comment('生日');

            $table->string('version', 100)->nullable();
            $table->string('device_id')->nullable();

            $table->index('user_id');
            $table->index('device_id');
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
        Schema::dropIfExists('profiles');
    }
}
