<?php

Route::get('/',['as' => 'auth.login','uses' => '\App\Http\Controllers\front\IndexController@getIndex']);
