<?php

namespace App\Http\Controllers;

use Faker\Provider\Base;
use Illuminate\Http\Request;
use App\User;
class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showindex()
    {
       /* $list=User::where("email","=","test")->get();*/
      /* return view('home',compact('list'));*/
        return view :: make('index');
    }
}
