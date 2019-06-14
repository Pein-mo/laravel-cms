<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\User::class,30)->create();
        $user = $users[0];
        $user->name='莫镇柱';
        $user->email = '251439200@qq.com';
        $user->icon = 'http://laravel.mo1120.com/uploads/2019-06-14/ntEbtpgP.jpg';
        $user->password = bcrypt('q20031120');
        $user->save();

    }
}
