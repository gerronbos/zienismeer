<?php
namespace App\Http\Controllers\admin\Forms;

use App\Entities\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth,Hash;
use Illuminate\Support\Facades\Input;
use App\Providers\Repositories\FormRepositorie;


class FormController extends Controller{

    public function getIndex()
    {
        $view = View::make('admin.forms.index');
        $view->forms = Form::orderBy('name','asc')->get();

        return $view;
    }
    public function getShow(Form $form)
    {
        $view = View::make('admin.forms.show');
        $view->form = $form;
        $view->totalamountquestions = FormRepositorie::getTotalQuestions($form);

        return $view;
    }

    public function getNew()
    {
        $view = View::make('admin.forms.new');
        $view->form = new Form();
        $view->types = Config("forms.types");

        return $view;
    }

    public function postNew(Request $request)
    {
        FormRepositorie::create($request->input());

        return Redirect::route('admin.forms');
    }

    public function getEdit(Form $form)
    {
        $view = View::make('admin.forms.edit');
        $view->form = $form;
        $view->types = Config("forms.types");

        return $view;
    }
    public function postEdit(Request $request, Form $form)
    {
        FormRepositorie::update($form, $request->input());

        return Redirect::route('admin.forms.show',[$form->id]);
    }

    public function postDelete(Request $request, Form $form)
    {
        FormRepositorie::delete($form);

        return Redirect::route('admin.forms',[$form->id]);
    }

    public function getCompetences(Form $form){
        $view = View::make('admin.forms.competences');
        $view->form = $form;
        $view->competences = $form->competences;

        return $view;
    }
}