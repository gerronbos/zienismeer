<?php
Route::group(['namespace' => 'admin\Forms', 'prefix' => 'admin/competence'],function() {
   Route::get("/",['as' => 'admin.competences','uses' => 'CompetenceController@getIndex']);
   Route::get("/show/{competence}",['as' => 'admin.competences.show','uses' => 'CompetenceController@getShow']);
   Route::get("/list",['as' => 'admin.competences.list','uses' => 'CompetenceController@getList']);
   Route::get('/new',['as' => 'admin.competences.new','uses' => 'CompetenceController@getNew']);
   Route::post('/new',['uses' => 'CompetenceController@postNew']);

   Route::get('/edit/{competence}',['as' => 'admin.competences.edit','uses' => 'CompetenceController@getEdit']);
   Route::post('/edit/{competence}',['uses' => 'CompetenceController@postEdit']);

   

});