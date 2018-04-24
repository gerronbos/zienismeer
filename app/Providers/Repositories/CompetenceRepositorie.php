<?php

namespace App\Providers\Repositories;

use App\Entities\Competence;
use App\Entities\Form;

class CompetenceRepositorie
{
    public static function create($form,$input)
    {
        $competence = new Competence();
        $competence->form_id = $form->id;
        $competence->name = $input['name'];
        $competence->description = $input['description'];
        $competence->save();
    }
}
