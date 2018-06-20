<?php
namespace App\Http\Controllers\admin\local_api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth,Hash;
use Illuminate\Support\Facades\Input;

class AuthenticateController extends Controller{

    public function getPassword()
    {
        return response()->json(Auth::user()->password)->header('Content-Type','application/json');
    }

    public function checkPassword(Request $request){
        $password = $request->input("password");
        return response()->json(Hash::check($password, Auth::user()->password))->header('Content-Type','application/json');
    }
}