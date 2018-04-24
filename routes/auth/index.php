<?php
Route::group(['prefix' => 'auth'],function() {
    Route::get('/',['as' => 'auth.login','uses' => '\App\Http\Controllers\Auth\AuthController@getLogin']);
    Route::post('/',['as' => 'auth.login','uses' => '\App\Http\Controllers\Auth\AuthController@postLogin']);
});