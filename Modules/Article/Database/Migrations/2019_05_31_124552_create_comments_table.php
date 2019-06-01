<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('user_id')->comment('用户id|input');
            $table->text('content')->comment('评论内容|simditor');
            $table->unsignedInteger('content_id')->comment('文章编号|input');
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');

        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
