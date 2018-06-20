<?php
Route::group(['namespace' => 'admin\Forms', 'prefix' => 'admin/forms'],function() {
    Route::get('/',['as' => 'admin.forms','uses' => 'FormController@getIndex']);
    Route::get('/show/{form}',['as' => 'admin.forms.show','uses' => 'FormController@getShow']);
    Route::get('/new',['as' => 'admin.forms.new','uses' => 'FormController@getNew']);
    Route::post('/new',['uses' => 'FormController@postNew']);

    Route::post('/delete/{form}',['as' => 'admin.forms.delete','uses' => 'FormController@postDelete']);

    Route::get('/edit/{form}',['as' => 'admin.forms.edit','uses' => 'FormController@getEdit']);
    Route::post('/edit/{form}',['uses' => 'FormController@postEdit']);

    Route::get('/{form}/competences',['as' => 'admin.form.competences','uses' => 'FormController@getCompetences']);
});