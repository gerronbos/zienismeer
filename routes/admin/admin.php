<?php

Route::group(['prefix' => 'admin'],function() {
    Route::get('/',['as' => 'admin','uses' => '\App\Http\Controllers\admin\AdminController@getIndex']);
});