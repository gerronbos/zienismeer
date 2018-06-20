<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';

    public function Answers()
    {
        return $this->hasMany('App\Entities\QuestionAnswers','questions_id');
    }

    public function Competences()
    {
        return $this->belongsToMany('App\Entities\Competence', 'competences_has_questions', 'question_id', 'competence_id');
    }

    public function getQuestionLabelAttribute(){
        return "Antwoorden";
    }
}