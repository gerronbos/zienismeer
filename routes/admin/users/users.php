<?php
Route::group(['prefix' => 'admin/users'],function() {
    Route::get('/',['as' => 'admin.users','uses' => '\App\Http\Controllers\admin\UserController@getIndex']);
});