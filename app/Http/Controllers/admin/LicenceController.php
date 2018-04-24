<?php
namespace App\Http\Controllers\admin;

use App\Entities\Licence;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View,Validator,Redirect,Auth;
use Illuminate\Support\Facades\Input;


class LicenceController extends Controller{
    public function getIndex()
    {
        $view = View::make('admin.licence.index');
        $view->licences = Licence::orderBy('title','asc')->get();

        return $view;
    }

    public function getNew()
    {
        $view = View::make('admin.licence.new');
        $view->licence = new Licence();

        return $view;
    }

}