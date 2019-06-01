<?php

Route::group(['middleware' => 'web', 'prefix' => 'ceshi', 'namespace' => 'Modules\Ceshi\Http\Controllers'], function()
{
    Route::get('/', 'CeshiController@index');
});
