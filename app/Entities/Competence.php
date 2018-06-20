<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'competences';

    public function Forms()
    {
        return $this->belongsToMany('App\Entities\Form', 'forms_has_competences', 'competence_id', 'form_id');
    }

    public function Questions()
    {
        return $this->belongsToMany('App\Entities\Question', 'competences_has_questions', 'competence_id', 'question_id');
    }

}