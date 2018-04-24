<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller{

    public function getIndex()
    {
        $view = View::make('admin.index');

        return $view;
    }
}