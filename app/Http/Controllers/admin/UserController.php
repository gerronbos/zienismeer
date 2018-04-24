<?php
namespace App\Http\Controllers\admin;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth;
use Illuminate\Support\Facades\Input;


class UserController extends Controller{

    public function getIndex()
    {
        $view = View::make('admin.users.index');
        $view->users = User::orderBy('firstname','asc')->get();


        return $view;
    }


}