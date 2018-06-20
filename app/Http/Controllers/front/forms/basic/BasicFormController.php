<?php
namespace App\Http\Controllers\front\forms\basic;

use App\Http\Controllers\Controller;
use View,Validator,Redirect,Auth;
use App\Entities\Form;
use App\Entities\Competence;

class BasicFormController extends Controller{

    public function getIndex(Form $form)
    {
        $competences = [
            "interpersoonlijk" => $form->competences()->where("competences.name",'=',"Interpersoonlijk")->first(),
            "samenwerken" => $form->competences()->where("competences.name",'=',"Samenwerken")->first(),
            "overlegvaardigheden" => $form->competences()->where("competences.name",'=',"Overlegvaardigheden (proces)")->first(),
            "ondernemend" => $form->competences()->where("competences.name",'=',"Ondernemend")->first()
        ];
        

        $view = View::make('front.forms.basic.index');
        $view->form = $form;
        $view->competences = $competences;
        
        return $view;
    }

    public function getCompetence(Form $form, Competence $competence){
        $view = view("front.forms.basic.competence");
        switch ($competence->name){
            case "Interpersoonlijk":
                $view->type = "interpersoonlijk";
            break;
            case "Samenwerken":
            $view->type = "samenwerken";
            break;
            case "Overlegvaardigheden (proces)":
            $view->type = "overlegvaardigheden";
            break;
            case "Ondernemend":
            $view->type = "ondernemend";
            break;
        }

        $view->competence = $competence;
        $view->form = $form;

        return $view;
    }

}