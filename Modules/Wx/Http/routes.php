<?php

Route::group(['middleware' => ['web','auth:admin'], 'prefix' => 'wx', 'namespace' => 'Modules\Wx\Http\Controllers'], function()
{
    Route::get('/', 'WxController@index');
});


//wx_config-route
Route::group(['middleware' => ['web','auth:admin'],'prefix'=>'wx','namespace'=>"Modules\Wx\Http\\Controllers"],
function () {
    Route::resource('wx_config', 'WxConfigController');
});
