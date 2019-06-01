<?php

Route::group(['middleware' => 'web', 'prefix' => 'mzz', 'namespace' => 'Modules\Mzz\Http\Controllers'], function()
{
    Route::get('/', 'MzzController@index');
});
