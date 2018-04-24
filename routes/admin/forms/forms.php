<?php
Route::group(['prefix' => 'admin/forms'],function() {
    Route::get('/',['as' => 'admin.forms','uses' => '\App\Http\Controllers\admin\FormController@getIndex']);
    Route::get('/new',['as' => 'admin.forms.new','uses' => '\App\Http\Controllers\admin\FormController@getNew']);
    Route::post('/new',['uses' => '\App\Http\Controllers\admin\FormController@postNew']);

    Route::get('/edit/{form}',['as' => 'admin.forms.edit','uses' => '\App\Http\Controllers\admin\FormController@getEdit']);
    Route::post('/edit/{form}',['uses' => '\App\Http\Controllers\admin\FormController@postEdit']);
});