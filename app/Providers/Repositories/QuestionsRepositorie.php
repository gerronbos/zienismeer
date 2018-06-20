<?php

namespace App\Providers\Repositories;

use App\Entities\Question;
use App\Entities\Form;
use App\Entities\QuestionAnswers;
use DB;

class QuestionsRepositorie
{
    public static function create($input)
    {
        $question = new Question();
        $question->name = $input['name'];
        $question->description = $input['description'];
        $question->save();

        return $question;
    }
    public static function edit(Question $question, $input)
    {
        $question->name = $input['name'];
        $question->description = $input['description'];
        $question->save();

        return $question;
    }

    public static function delete(Question $question, $params = []){

        if(count($question->competences) > 1 && isset($params["competence_id"])){
            DB::table("competences_has_questions")->where("question_id",'=',$question->id)->where("competence_id",'=',$params['competence_id'])->delete();
        }
        else{
            DB::table("questionanswers")->where("questions_id",'=',$question->id)->delete();
            $question->delete();
        }
    }

    public static function get($params = []){
        $questions = Question::where("id",'!=',0);

        if(isset($params["except"]) && is_array($params["except"])){
            $questions->whereNotIn("id",$params["except"]);
        }


        return $questions;
    }

    public static function positionUp(Question $question, QuestionAnswers $answer){
        DB::table("questionanswers")->where("questions_id","=",$question->id)->where("position",'=',$answer->position - 1)->update(["position" => $answer->position]);

        $answer->position = $answer->position - 1;
        $answer->save();
    }
    public static function positionDown(Question $question, QuestionAnswers $answer){
        DB::table("questionanswers")->where("questions_id","=",$question->id)->where("position",'=',$answer->position + 1)->update(["position" => $answer->position]);

        $answer->position = $answer->position + 1;
        $answer->save();
    }

    public static function createAnswer($params = []){

    }

    public static function editAnswer(QuestionAnswers $answer, $params = []){
        $answer->name = $params["name"];
        $answer->weight = $params["weight"];
        $answer->save();
    }
}
