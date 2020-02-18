<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('hash')->nullable()->comment('哈希值');
            $table->string('path')->nullable()->index()->comment('路径');
            $table->unsignedInteger('width')->nullable()->comment('宽');
            $table->unsignedInteger('height')->nullable()->comment('高');
            $table->string('extension')->nullable()->index()->comment('扩展名');

            $table->index('hash');
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
        Schema::dropIfExists('images');
    }
}
