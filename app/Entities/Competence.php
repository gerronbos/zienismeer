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

    public function Questions()
    {
        return $this->hasMany('App\Entities\CompetenceQuestion');
    }

}