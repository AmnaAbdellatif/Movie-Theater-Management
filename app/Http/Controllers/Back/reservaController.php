<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Routing\Controller as BaseController;
class reservaController extends BaseController
{
    //
    public function allReservations()
    {

        $reservations = Reservation::all();
        return view('Back.showReservation', array('reservations' => $reservations));
        /* la fonction compact équivaut à array('posts' => $posts) */
    }
}
