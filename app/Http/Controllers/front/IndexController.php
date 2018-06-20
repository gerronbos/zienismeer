<?php
namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use View,Validator,Redirect,Auth;
use App\Entities\Form;

class IndexController extends Controller{

    public function getIndex()
    {
        $form = Form::where("type",'=','page')->where("layout",'=',0)->first();
        return redirect()->route('form.basic', [$form->id]);
    }

}