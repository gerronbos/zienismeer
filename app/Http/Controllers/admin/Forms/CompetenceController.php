<?php
namespace App\Http\Controllers\admin\Forms;

use App\Entities\Competence;
use App\Entities\Form;
use App\Http\Controllers\Controller;
use App\Providers\Repositories\CompetenceRepositorie;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth;
use Illuminate\Support\Facades\Input;
use App\Providers\Repositories\FormRepositorie;


class CompetenceController extends Controller{

    public function getIndex(){
        $view = View::make('admin.competences.index');
        $view->competences = Competence::orderBy('name','asc')->paginate(25);

        return $view;
    }

    public function getShow(Competence $competence){
        $view = view("admin.competences.show");

        $view->competence = $competence;
        if(Input::get("form_id")){
            $view->form_id = Input::get("form_id");
        }

        return $view;
    }

    public function getNew()
    {
        $view = View::make('admin.competences.new');
        $view->competence = new Competence();
        if(Input::get('form_id')){
            $view->form_id = Input::get('form_id');
        }

        return $view;
    }

    public function postNew(Request $request)
    {
        $competence = CompetenceRepositorie::create($request->input());

        if($request->input("form_id")){
            FormRepositorie::signCompetence($request->input("form_id"),$competence);

            return Redirect::route('admin.form.competences',[$request->input("form_id")]);
        }

        return Redirect::route('admin.competences');
    }

    public function getEdit(Competence $competence)
    {
        $view = View::make('admin.competences.edit');
        $view->competence = $competence;

        if(Input::get("form_id")){
            $view->form_id = Input::get("form_id");
        }

        return $view;
    }

    public function postEdit(Request $request,Competence $competence)
    {
        $competence = CompetenceRepositorie::update($competence,$request->input());

        if($request->input("form_id")){
            return Redirect::route('admin.form.competences',[$request->input("form_id")]);
        }

        return Redirect::route('admin.competences');
    }

    public function getList(){
        $view = view("admin.competences.list");
        if(Input::get("form_id")){
            $form = Form::find(Input::get("form_id"));
            $competence = Competence::whereNotIn("id",$form->competences()->pluck("competences.id")->all());
        }
        else{
            $competence = Competence::where("id",'!=',0);
        }

        $view->competences = $competence->orderBy("name",'asc')->get();
        $view->form_id = Input::get("form_id");
        

        return $view;
    }

}