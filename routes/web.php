<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require('auth/index.php');
require('front/index.php');
require('admin/admin.php');

Route::group(['middleware' => ['auth','isAdmin']],function() {
    require('admin/forms/forms.php');
    require('admin/forms/competences/competences.php');
    require('admin/questions/questions.php');
    require('admin/licence/licence.php');
    require('admin/users/users.php');
    require('admin/local_api/Authenticate.php');

});


Route::group([],function() {
    require('front/forms/basic.php');

});


