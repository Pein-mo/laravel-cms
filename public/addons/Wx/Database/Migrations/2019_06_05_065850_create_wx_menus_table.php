<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWxMenusTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('wx_menus', function (Blueprint $table) {
            $table->increments('id');

            $table->string('data')->comment('标题|input');

        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('wx_menus');
    }
}
