<?php
namespace App\Http\Controllers\admin;

use App\Entities\CompetenceQuestion;
use App\Http\Controllers\Controller;
use App\Providers\Repositories\CompetenceQuestionsRepositorie;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth;
use Illuminate\Support\Facades\Input;

class QuestionController extends Controller{

    public function getIndex($form,$competence)
    {
        $view = View::make('admin.forms.competences.questions.index');
        $view->form = $form;
        $view->competence = $competence;
        $view->questions = $competence->Questions;

        return $view;
    }

    public function getShow($form, $competence, $question)
    {
        $view = View::make('admin.forms.competences.questions.show');
        $view->form = $form;
        $view->competence = $competence;
        $view->question = $question;
        $view->answers = $question->answers;

        return $view;
    }

    public function getNew($form, $competence)
    {
        $view = View::make('admin.forms.competences.questions.new');
        $view->form = $form;
        $view->competence = $competence;
        $view->question = new CompetenceQuestion();

        return $view;
    }

    public function postNew(Request $request, $form, $competence)
    {
        $question = CompetenceQuestionsRepositorie::create($competence,$request->input());

        return Redirect::route('admin.form.competences.questions.show',[$form->id,$competence->id,$question->id]);
    }

    public function getEdit($form, $competence,$question)
    {
        $view = View::make('admin.forms.competences.questions.edit');
        $view->form = $form;
        $view->competence = $competence;
        $view->question = $question;

        return $view;
    }

    public function postEdit(Request $request, $form, $competence,$question)
    {
        $question = CompetenceQuestionsRepositorie::create($competence,$request->input());

        return Redirect::route('admin.form.competences.questions.show',[$form->id,$competence->id,$question->id]);
    }

    public function getNewAnswer($form, $competence, $question)
    {
        $view = view::make('admin.forms.competences.questions.answers.new');
        $view->form = $form;
        $view->competence = $competence;
        $view->question = $question;
        $view->answertypes = ['Ja/Nee','Nee/Ja','Onvoldoende/Voldoende/Licht gevorderd/Expert','Anders'];

        return $view;
    }


}