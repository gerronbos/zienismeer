<?php
namespace App\Http\Controllers\admin;

use App\Entities\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth;
use Illuminate\Support\Facades\Input;
use App\Providers\Repositories\FormRepositorie;


class FormController extends Controller{

    public function getIndex()
    {
        $view = View::make('admin.forms.index');
        $view->forms = Form::orderBy('name','asc')->get();

        return $view;
    }

    public function getNew()
    {
        $view = View::make('admin.forms.new');
        $view->form = new Form();

        return $view;
    }

    public function postNew(Request $request)
    {
        FormRepositorie::create($request->input());

        Return Redirect::route('admin.forms');
    }

    public function getEdit($form)
    {
        $view = View::make('admin.forms.edit');
        $view->form = $form;

        return $view;
    }
}