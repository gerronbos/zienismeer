<?php
namespace App\Http\Controllers\admin;

use App\Entities\Competence;
use App\Entities\Form;
use App\Http\Controllers\Controller;
use App\Providers\Repositories\CompetenceRepositorie;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth;
use Illuminate\Support\Facades\Input;
use App\Providers\Repositories\FormRepositorie;


class CompetenceController extends Controller{

    public function getIndex($form)
    {
        $view = View::make('admin.forms.competences.index');
        $view->form = $form;
        $view->competences = $form->competences;

        return $view;
    }

    public function getList(){
        $view = View::make('admin.competences.index');
        $view->competences = Competence::orderBy('name','asc')->paginate(25);

        return $view;
    }

    public function getNew($form)
    {
        $view = View::make('admin.forms.competences.new');
        $view->form = $form;
        $view->competence = new Competence();

        return $view;
    }

    public function postNew(Request $request, $form)
    {
        CompetenceRepositorie::create($form,$request->input());

        Return Redirect::route('admin.form.competences',[$form->id]);
    }

    public function getEdit($form, $competence)
    {
        $view = View::make('admin.forms.competences.edit');
        $view->form = $form;
        $view->competence = $competence;

        return $view;
    }

}