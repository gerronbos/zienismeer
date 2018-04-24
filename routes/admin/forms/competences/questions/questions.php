<?php
Route::group(['prefix' => 'admin/forms/{form}/competence/{competence}/questions'],function() {
    Route::get('/',['as' => 'admin.form.competences.questions','uses' => '\App\Http\Controllers\admin\QuestionController@getIndex']);
    Route::get('/{competencequestion}',['as' => 'admin.form.competences.questions.show','uses' => '\App\Http\Controllers\admin\QuestionController@getShow']);
    Route::get('/new',['as' => 'admin.form.competences.questions.new','uses' => '\App\Http\Controllers\admin\QuestionController@getNew']);
    Route::post('/new',['uses' => '\App\Http\Controllers\admin\QuestionController@postNew']);

    Route::get('/{competencequestion}/edit',['as' => 'admin.form.competences.questions.edit','uses' => '\App\Http\Controllers\admin\QuestionController@getEdit']);
    Route::post('/{competencequestion}/edit',['uses' => '\App\Http\Controllers\admin\QuestionController@postEdit']);

    Route::get('/{competencequestion}/answer/new',['as' => 'admin.form.competences.questions.answer.new','uses' => '\App\Http\Controllers\admin\QuestionController@getNewAnswer']);


});