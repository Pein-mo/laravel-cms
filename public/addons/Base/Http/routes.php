<?php

Route::group(['middleware' => 'web', 'prefix' => 'base', 'namespace' => 'Modules\Base\Http\Controllers'], function()
{
    Route::get('/', 'BaseController@index');
});

 
//base-route
Route::group(['middleware' => ['web'],'prefix'=>'base','namespace'=>"Modules\Base\Http\\Controllers"], 
function () {
    Route::resource('base', 'BaseController');
});