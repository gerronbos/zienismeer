<?php
namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use View,Validator,Redirect,Auth;

class IndexController extends Controller{

    public function getIndex()
    {
        $view = View::make('front.index');
        return $view;
    }

}