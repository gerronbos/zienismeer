<?php
Route::group(['prefix' => 'admin/license'],function() {
    Route::get('/',['as' => 'admin.licence','uses' => '\App\Http\Controllers\admin\LicenceController@getIndex']);
    Route::get('/new',['as' => 'admin.licence.new','uses' => '\App\Http\Controllers\admin\LicenceController@getNew']);
});