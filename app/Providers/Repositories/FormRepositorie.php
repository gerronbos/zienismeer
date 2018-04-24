<?php

namespace App\Providers\Repositories;

use App\Entities\Form;

class FormRepositorie
{
    public static function create($input)
    {
        $form = new Form();
        $form->name = $input['name'];
        $form->active = $input['active'];
        $form->save();
    }
}
