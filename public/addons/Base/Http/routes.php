<?php




//base-route
Route::group(['middleware' => ['web','auth:admin'],'prefix'=>'base','namespace'=>"Modules\base\Http\\Controllers"],
function () {
    Route::resource('base', 'BaseController');
});
