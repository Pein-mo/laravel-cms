<?php

Route::group(['middleware' =>'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::name('admin.')->group(function (){
        Auth::routes();
    });

});

Route::group(['middleware' => ['web','auth:admin'], 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index');
    //角色资源路由
    Route::resource('role','RoleController')->middleware("permission:admin,resource");
    Route::get('role/permission/{role}','RoleController@permission')->middleware("permission:admin");
    Route::post('role/permission/{role}','RoleController@permissionStore')->middleware("permission:admin");
    Route::post('role/destory/{role}','RoleController@destory')->middleware("permission:admin");
});

 
//modules-route
Route::group(['middleware' => ['web','auth:admin'],'prefix'=>'admin','namespace'=>"Modules\Admin\Http\\Controllers"],
function () {
    Route::get('module_set_default/{modules}','ModulesController@setDefault');
    Route::get('module_update_cache','ModulesController@updateCache');
    Route::resource('modules', 'ModulesController');
});