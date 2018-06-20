<?php

namespace App\Providers\Repositories;

use App\Entities\Competence;
use App\Entities\Form;
use DB;

class CompetenceRepositorie
{
    public static function create($input)
    {
        $competence = new Competence();
        $competence->name = $input['name'];
        $competence->description = $input['description'];
        $competence->save();

        return $competence;
    }

    public static function update($competence, $input)
    {
        $competence->name = $input['name'];
        $competence->description = $input['description'];
        $competence->save();

        return $competence;
    }

    public static function getAmountQuestions($competence){
        $amount = 0;

        $subCompetences = Competence::where("parent_id",'=',$competence->id)->get();
        if(count($subCompetences)){
            foreach($subCompetences as $sc){
                $amount += self::getAmountQuestions($sc);
            }
        }
        $amount += count($competence->questions);

        return $amount;
    }

    public static function linkQuestion($question, $competence){
        if(is_object($question)){
            $question = $question->id;
        }
        if(is_object($competence)){
            $competence = $competence->id;
        }

        DB::table("competences_has_questions")->insert(["question_id" => $question,"competence_id" => $competence,"created_at" => new \DateTime() ,"updated_at" => new \DateTime()]);
    }
}
