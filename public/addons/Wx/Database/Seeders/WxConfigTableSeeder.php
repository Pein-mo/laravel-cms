<?php

namespace Modules\Wx\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class WxConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        \DB::table('wx_configs')->insert([
            ['name' => 'token', 'value' => 'q20031120'],
            ['name' => 'encodingaeskey', 'value' => 'meoGpLGM6hhpbYziuxMvUqlW9pYOcM0eh3Ov1mSnf2y'],
            ['name' => 'appid', 'value' => 'wx08d98d565f03afdd'],
            ['name' => 'appsecret', 'value' => '61bf11bd344defc6674399f953c5e63c'],
        ]);
    }
}
