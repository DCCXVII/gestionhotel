<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        return view('reservations');
    }

    public function getReservations(Request $request){
        $reservations = Reservation::all();
        return view('/reservations', compact('reservations'));
    }


    public function createResevation(Request  $request){
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->save();
        return redirect('/reservations');
    }


}
