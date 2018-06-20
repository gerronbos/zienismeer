<?php
Route::group(['prefix' => 'local_api/authenticate'],function() { 
    Route::get('/getpassword',['as' => 'admin.localapi.authenticate.getpassword','uses' => '\App\Http\Controllers\admin\local_api\AuthenticateController@getPassword']);
    Route::get('/checkPassword',['as' => 'admin.localapi.authenticate.checkPassword','uses' => '\App\Http\Controllers\admin\local_api\AuthenticateController@checkPassword']);
});