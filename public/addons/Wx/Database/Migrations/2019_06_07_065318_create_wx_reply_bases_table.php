<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWxReplyBasesTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('wx_reply_bases', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('content')->comment('回复内容|textarea');

        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('wx_reply_bases');
    }
}
