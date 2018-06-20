<?php
Route::group(['namespace' => 'admin\Forms', 'prefix' => 'admin/questions'],function() {
    Route::get('/show/{question}',['as' => 'admin.questions.show','uses' => 'QuestionController@getShow']);

    Route::get('/list',['as' => 'admin.questions.list','uses' => 'QuestionController@getList']);
    Route::post('/list',['uses' => 'QuestionController@postList']);

    Route::get('/new',['as' => 'admin.questions.new','uses' => 'QuestionController@getNew']);
    Route::post('/new',['uses' => 'QuestionController@postNew']);

    Route::get('/edit/{question}',['as' => 'admin.questions.edit','uses' => 'QuestionController@getEdit']);
    Route::post('/edit/{question}',['uses' => 'QuestionController@postEdit']);

    Route::post('/delete/{question}',['as' => 'admin.questions.delete','uses' => 'QuestionController@postDelete']);

    Route::get('/changeposistion/{question}/{answer}',['as' => 'admin.questions.changeposition','uses' => 'QuestionController@getChangePosition']);

    Route::post('/{question}/{answer}/edit',['as' => 'admin.questions.answer.edit','uses' => 'QuestionController@postAnswerEdit']);

});