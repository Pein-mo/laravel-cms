<?php

Route::group(['middleware' =>['web','auth:web'] , 'prefix' => 'socket', 'namespace' => 'Modules\Socket\Http\Controllers'], function()
{
    Route::get('/', 'SocketController@index');
});
