<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CompetenceQuestion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'competencequestions';

    public function Answers()
    {
        return $this->hasMany('App\Entities\CompetenceQuestionAnswers','competencequestions_id');
    }
}