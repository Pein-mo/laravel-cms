<?php

Route::group(['middleware' => 'web', 'prefix' => 'bbc', 'namespace' => 'Modules\Bbc\Http\Controllers'], function()
{
    Route::get('/', 'BbcController@index');
});
