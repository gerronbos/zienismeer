<?php
Route::group(['prefix' => 'auth'],function() {
    Route::get('/',['as' => 'login','uses' => '\App\Http\Controllers\Auth\AuthController@getLogin']);
    Route::post('/',['uses' => '\App\Http\Controllers\Auth\AuthController@postLogin']);
});