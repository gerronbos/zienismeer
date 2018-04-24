<?php

namespace App\Providers\Repositories;

use App\Entities\CompetenceQuestion;
use App\Entities\Form;

class CompetenceQuestionsRepositorie
{
    public static function create($competence,$input)
    {
        $competencequestion = new CompetenceQuestion();
        $competencequestion->competence_id = $competence->id;
        $competencequestion->name = $input['name'];
        $competencequestion->description = $input['description'];
        $competencequestion->save();

        return $competencequestion;
    }
}
