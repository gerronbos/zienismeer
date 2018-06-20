<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use View,Validator,Redirect,Auth;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller{

    public function getLogin()
    {
        $view = View::make('auth.login');


        return $view;

    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect()->back()
                ->withErrors($validator)
                ->withInput(Input::all());
        }

        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],1)){
            return Redirect()->route('admin');
        }
        else{
            $error = new MessageBag();
            $error->add('login_fail','Email en wachtwoord komen niet overeen.');
            return Redirect()->back()
                ->withErrors($error)
                ->withInput(Input::all());

        }


    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
}