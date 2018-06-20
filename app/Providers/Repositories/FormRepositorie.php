<?php

namespace App\Providers\Repositories;

use App\Entities\Form;
use DB;
use App\Providers\Repositories\CompetenceRepositorie;

class FormRepositorie
{
    public static function create($input)
    {
        $form = new Form();
        $form->name = $input['name'];
        $form->active = $input['active'];
        $form->type = $input["type"];
        $form->layout = 0;
        $form->save();

        return $form;
    }
    public static function signCompetence($form,$competence){
        if(is_object($form)){
            $form = $form->id;
        }
        if(is_object($competence)){
            $competence = $competence->id;
        }

        DB::table("forms_has_competences")->insert(["competence_id" => $competence,"form_id" => $form,"created_at" => new \DateTime() ,"updated_at" => new \DateTime()]);

    }

    public static function update($form,$input)
    {
        $form->name = $input['name'];
        $form->active = $input['active'];
        $form->type = $input["type"];
        $form->save();

        return $form;
    }

    public static function delete($form){
        DB::table("forms_has_competences")->where("form_id",'=',$form->id)->delete();
        $form->delete();
    }

    public static function getTotalQuestions($form){
        $amount = 0;
        foreach($form->competences as $competence){
            $amount += CompetenceRepositorie::getAmountQuestions($competence);
        }

        return $amount;
    }
}
