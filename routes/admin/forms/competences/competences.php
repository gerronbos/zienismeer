<?php
Route::group(['prefix' => 'admin/forms/{form}/competence'],function() {
    Route::get('/linked',['as' => 'admin.form.competences','uses' => '\App\Http\Controllers\admin\CompetenceController@getIndex']);
    Route::get('/new',['as' => 'admin.form.competences.new','uses' => '\App\Http\Controllers\admin\CompetenceController@getNew']);
    Route::post('/new',['uses' => '\App\Http\Controllers\admin\CompetenceController@postNew']);

    Route::get('/edit/{competence}',['as' => 'admin.form.competences.edit','uses' => '\App\Http\Controllers\admin\CompetenceController@getEdit']);
    Route::post('/edit/{competence}',['uses' => '\App\Http\Controllers\admin\CompetenceController@postEdit']);
});

Route::group(['prefix' => 'admin/competence'],function() {
   Route::get("/",['as' => 'admin.competences','uses' => '\App\Http\Controllers\admin\CompetenceController@getList']);

});