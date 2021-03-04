<?php

namespace App\Http\Controllers\Back;

/*use App\User;
use Illuminate\Http\Request;*/
use Illuminate\Routing\Controller as BaseController;


class AdminController extends BaseController
{

    public function login()
    {
        return view('Front.login');
    }

    public function index()
{
    return view('back.index');
}
    public function createFilm()
    {
        return view('back.create');
    }
    public function showFilm()
    {
        return view('back.showFilms');
    }
    public function createUsers()
    {
        return view('back.createUser');
    }
    public function showUser()
    {
        return view('back.showUsers');
    }
    public function editFilm()
    {
        return view('back.editFilms');
    }
}
