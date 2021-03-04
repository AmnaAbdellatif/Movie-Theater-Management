<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\dateprojection;
use Illuminate\Routing\Controller as BaseController;
class ProjectionController extends BaseController{

    public function allprojections()
    {

        $dateprojection = dateprojection::all();
        return view('Front.Showdates', array('dateprojection' => $dateprojection));
        /* la fonction compact équivaut à array('posts' => $posts) */
    }
}
