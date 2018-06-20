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
        return $this->belongsToMany('App\Entities\Competence', 'forms_has_competences', 'form_id', 'competence_id');
        return $this->hasMany('App\Entities\Competence');
    }


    public function getLayoutImageAttribute(){
        $layouts = Config("forms.layouts");

        return $layouts[$this->layout]["img"];
    }
}