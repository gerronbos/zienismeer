<?php
Route::group(['namespace' => 'front\forms\basic', 'prefix' => 'form/basic/{form}'],function() {
    Route::get('/',['as' => 'form.basic','uses' => 'BasicFormController@getIndex']);

    Route::get('/competence/{competence}',['as' => 'form.basic.competence','uses' => 'BasicFormController@getCompetence']);
});