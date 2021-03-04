<?php

namespace App\Http\Controllers\Front;

//use Faker\Provider\Base;
use Illuminate\Routing\Controller as BaseController;
//use App\User;
class HomeController extends BaseController
{
public function ___construct(){
    $this->middleware('auth');
}
    public function index()
    {
        $list=User::where("email","=","test")->get();
        return view('home',compact('list'));
    }
    public function home()
    {
        return view('Front.home');
    }
    public function videos()
    {
        return view('Front.videos');
    }
    public function reviews()
    {
        return view('Front.reviews');
    }
    public function contact()
    {
        return view('Front.contact');
    }
    public function aboutus()
    {
        return view('Front.about-us');
    }
    public function Avanttoi()
    {
        return view('Front.Avant-toi');
    }
    public function showdates()
    {
        return view('Front.Showdates');
    }
    public function Reservation()
    {
        return view('Front.reservation');
    }
    public function FormReservation()
    {
        return view('Front.confirmReservation');
    }
    //back

    public function showFilms()
    {
        return view('Back.showFilms');
    }
    public function createFilms()
    {
        return view('Back.create');
    }
    public function login()
    {
        return view('Front.login');
    }
    public function createUserFront()
    {
        return view('Front.createUserFront');
    }
}
