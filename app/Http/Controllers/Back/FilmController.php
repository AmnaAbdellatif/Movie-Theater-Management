<?php

namespace App\Http\Controllers\Back;

use App\Films;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FilmController extends BaseController
{

    public function create()
    {
        return view('Back.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     */
    public function addFilm(Request $request)
    {

    /*    $films= new films();
        $films->name=$request->input('name');
        $films->duree=$request->input('duree');
        $films->realisateur=$request->input('realisateur');
        $films->categorie=$request->input('categorie');

        if ($request->hasFile('image')){
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploads/films/',$filename);
        $films->image=$filename;
         } else{
        return $request;
        $films->image='';
    }
$films->save();
        return view ('Back.showFilms',compact('films'));*/


        $film= Films::create([
            'name' => $request['name'],
            'realisateur' => $request['realisateur'],
            'duree' => $request['duree'],
            'categorie' => $request['categorie'],
            'image' => $request['image'],
            request(['name', 'realisateur', 'duree','categorie','image'])

        ]);

        $films = Films::all();
       // $film = Films::create(request(['name', 'realisateur', 'duree','categorie','image']));
        return view ('Back.showFilms',compact('films'));





    }


    public function allFilms()
    {

        $films = Films::all();
        return view('Back.showFilms', array('films' => $films));
        /* la fonction compact équivaut à array('posts' => $posts) */
    }


    public function deleteFilm($id)
    {
        $booking = Films::findOrFail($id);
        var_dump($booking->name);
        $booking->delete();
        //$this->allUsers();
        return redirect('/showFilms');
        /*$films= Films::all();
        return view('Back.showFilms', array('films' => $films));*/
    }

    public function editFilm (  $id)
    {
        /*$arr['films'] = $films;
        return view('Back.editFilm')->with($arr);*/
        $film = Films::find($id);
        return view('Back.editFilm', compact('film', 'id'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse **/

    public function updateFilm(Request $request,  $id)
    {
        $films = Films::find($id);
        $nameF = $request->input('name'); // This is better than using $_POST
        $dureeF = $request->input('duree'); // This is better than using $_POST
        $realisateurF = $request->input('realisateur'); // This is better than using $_POST
        $categorieF = $request->input('categorie'); // This is better than using $_POST
        $imageF = $request->input('image'); // This is better than using $_POST
        $films->name = $nameF;
        $films->duree = $dureeF;
        $films->realisateur = $realisateurF;
        $films->categorie = $categorieF;
        $films->image = $imageF;
        $films->save();
        //return redirect()->route('Back.showFilms');
        return redirect('/showFilms');
    }



}
