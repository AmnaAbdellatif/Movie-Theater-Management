<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Routing\Controller as BaseController;
class ReservationController extends BaseController
{
    //
    public function create()
    {
        return view('Front.reservation');
    }

    /*function account(Request $req){
        return $req->input();
    }*/

    public function addReservation(Request $request)
    {

        $res = Reservation::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'date' => $request['date'],
            'time' => $request['time'],
            'salle' => $request['salle'],
            'quantity' => $request['quantity'],
            'quantityS' => $request['quantityS'],
            'total' => $request['total'],
            request(['name', 'username', 'date', 'time', 'salle', 'quantity','quantityS', 'total'])


        ]);
        $reservations = Reservation::all();

//        return view ('Front.reservation',compact('reservations'));
        return redirect()->back()->with(['message' => 'Reservation is saved into the database', 'alert' => 'alert-success']);

    }

        public function store(Request $request) {

            $this->create($request,[
                'name'=> 'required',
                '$username'=> 'required',
                '$date'=> 'required',
                '$time'=>'required',
                '$salle'=> 'required',
                '$quantity'=> 'required',
                '$quantityS'=> 'required',
                '$total'=> 'required',

            ]);
            $reservation = new Reservation;   // valible and model name
            $reservation-> name = $request->input('name');
            $reservation-> username = $request->input('username');
            $reservation-> date = $request->input('date');
            $reservation-> time = $request->input('time');
            $reservation-> salle = $request->input('salle');
            $reservation-> quantity = $request->input('quantity');
            $reservation-> quantityS = $request->input('quantityS');
            $reservation-> total= $request->input('total');
            $reservation-> save();
            return redirect()->back()->with(['message' => 'Reservation is saved with success', 'alert' => 'alert-success']);

            /* $reservation= new Reservation();
             $reservation->name=$name;
             $reservation->name=$username;
             $reservation->name=$date;
             $reservation->name=$time;
             $reservation->name=$salle;
             $reservation->name=$quantityNO;
             $reservation->name=$quantityES;
             $reservation->name=$total;
             $reservation ->save();
             //save new customer
             $store-> save();*/

            //redirect

           // return redirect('/reservation');

       /* $name= request('name');
        $username= request('username');
        $date= request('date');
        $time= request('time');
        $salle= request('salle');
        $quantityNO= request('quantityNO');
         $quantityES= request('$quantityES');
         $total= request('total');

    $reservation= new Reservation();
    $reservation->name=$name;
    $reservation->name=$username;
    $reservation->name=$date;
    $reservation->name=$time;
    $reservation->name=$salle;
    $reservation->name=$quantityNO;
    $reservation->name=$quantityES;
    $reservation->name=$total;
    $reservation ->save();

    return back();*/
}

}



