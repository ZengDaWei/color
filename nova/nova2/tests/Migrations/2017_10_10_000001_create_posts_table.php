<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();

            $table->integer('type')->default(0)->comment('0-video 1-article');
            $table->integer('status')->default(1)->comment('-1-offline 1-online');

            $table->unsignedInteger('count_likes')->default(0);
            $table->unsignedInteger('count_comments')->default(0);
            $table->unsignedInteger('hot')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
