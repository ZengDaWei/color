<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('relative_path', 100)->nullable()->comment('相对路径');
            $table->string('absolute_path', 100)->nullable()->comment('绝对路径');
            $table->string('hash')->nullable()->comment('file hash value');
            $table->string('disk', 30)->nullable()->comment('on which disk');
            $table->string('type', 30)->nullable()->comment('类型');
            $table->float('duration')->comment('时长');
            $table->morphs('used');

            $table->index('user_id');
            $table->index('hash');
            $table->softDeletes();
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
        Schema::dropIfExists('videos');
    }
}