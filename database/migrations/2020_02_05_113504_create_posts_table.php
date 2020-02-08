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
            $table->bigIncrements('id');
            $table->string('description')->nullable()->comment('描述');
            $table->unsignedInteger('user_id')->comment('作者');
            $table->text('content')->nullable()->comment('内容');
            $table->integer('status')->default(1)->comment('1-online -1-offline');
            $table->tinyInteger('type')->default(0);
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('hot')->default(0)->comment('热度');
            $table->unsignedInteger('count_likes')->default(0)->comment('点赞数');
            $table->unsignedInteger('count_comments')->default(0)->comment('点赞数');

            $table->index('user_id');
            $table->index('category_id');
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
