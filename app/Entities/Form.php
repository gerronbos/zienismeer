<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forms';

    public function Competences()
    {
        return $this->hasMany('App\Entities\Competence');
    }
}