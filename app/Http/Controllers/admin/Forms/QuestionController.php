<?php
namespace App\Http\Controllers\admin\Forms;

use App\Entities\Question;
use App\Http\Controllers\Controller;
use App\Providers\Repositories\CompetenceQuestionsRepositorie;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth;
use Illuminate\Support\Facades\Input;
use App\Providers\Repositories\QuestionsRepositorie;
use App\Entities\Competence;
use App\Providers\Repositories\CompetenceRepositorie;
use App\Entities\QuestionAnswers;

class QuestionController extends Controller{

    public function getIndex($form,$competence)
    {
        $view = View::make('admin.forms.competences.questions.index');
        $view->form = $form;
        $view->competence = $competence;
        $view->questions = $competence->Questions;

        return $view;
    }
    public function getList()
    {
        $view = View::make('admin.questions.list');
        if(Input::get("competence_id")){
            $view->competence_id = Input::get("competence_id");
            $questions = QuestionsRepositorie::get(["except" => Competence::find(Input::get("competence_id"))->questions()->pluck("questions.id")->all()]);
        }
        else{
            $questions = QuestionsRepositorie::get();
        }
        if(Input::get("form_id")){
            $view->form_id = Input::get("form_id");
        }
        $view->questions = $questions->orderBy("name","asc")->paginate("25");

        return $view;
    }
    public function postList(Request $request)
    {
        foreach($request->input("questions") as $question){
            CompetenceRepositorie::linkQuestion($question,$request->input("competence_id"));
        }
        $routeParams = ["competence_id" => $request->input("competence_id")];
        if($request->input("form_id")){
            $routeParams["form_id"] = $request->input("form_id");
        }
        return redirect()->route('admin.questions.list', $routeParams);
    }

    public function getShow(Question $question)
    {
        $view = View::make('admin.questions.show');
        $view->question = $question;
        if(Input::get("competence_id")){
            $view->competence_id = Input::get("competence_id");
        }
        if(Input::get("form_id")){
            $view->form_id = Input::get("form_id");
        }

        return $view;
    }

    public function getNew()
    {
        $view = View::make('admin.questions.new');
        if(Input::get("form_id")){
            $view->form_id = Input::get("form_id");
        }
        if(Input::get("competence_id")){
            $view->competence_id = Input::get("competence_id");
        }
        $view->question = new Question();

        return $view;
    }

    public function postNew(Request $request)
    {
        $question = QuestionsRepositorie::create($request->input());
        if($request->input("competence_id")){
            CompetenceRepositorie::linkQuestion($question,$request->input("competence_id"));
            $routeParams = [
                "competence_id" => $request->input("competence_id")
            ];
            if($request->input("form_id")){
                $routeParams["form_id"] = $request->input("form_id");
            }
            return Redirect::route('admin.questions.list',$routeParams);
        }
    }

    public function getEdit(Question $question)
    {
        $view = View::make('admin.questions.edit');
        if(Input::get("form_id")){
            $view->form_id = Input::get("form_id");
        }
        if(Input::get("competence_id")){
            $view->competence_id = Input::get("competence_id");
        }
        $view->question = $question;

        return $view;
    }

    public function postEdit(Request $request, Question $question)
    {
        $question = QuestionsRepositorie::edit($question, $request->toArray());


        return Redirect::route('admin.questions.show',[$question->id,"form_id" => $request->input("form_id"),"competence_id" => $request->input("competence_id")]);
    }

    public function postDelete(Request $request, Question $question)
    {
        QuestionsRepositorie::delete($question, $request->toArray());

        return redirect(url()->previous());
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

    public function getChangePosition(Question $question, QuestionAnswers $answer){
        switch(Input::get("type")){
            case "up":
                QuestionsRepositorie::positionUp($question, $answer);
            break;

            case "down":
                QuestionsRepositorie::positionDown($question, $answer);
            break;
        }

        return redirect(url()->previous());
    }

    public function postAnswerEdit(Request $request, Question $question, QuestionAnswers $answer){
        QuestionsRepositorie::editAnswer($answer,$request->toArray());

        return redirect(url()->previous());
    }


}