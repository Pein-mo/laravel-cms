<?php

Route::group(
    ['middleware' => 'web', 'prefix' => 'api', 'namespace' => 'Modules\Api\Http\Controllers'],
    function () {
        Route::get('/', 'ApiController@index');

    }
);
Route::get('/api/hook', 'ApiController@hook');

