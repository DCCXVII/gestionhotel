<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservations');
    }

    public function getReservations(Request $request)
    {
        $reservations = Reservation::all();
        return view('/reservations', compact('reservations'));
    }





    public function createResevation(Request $request)
    {
        $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'numero_chambre' => 'required',
            'Nomclient' => 'required',
            'prix' => 'required|numeric',
            'status' => 'required|in:Pending,Confirmed,Cancelled',
        ]);

        $reservation = new Reservation();
        $reservation->date_debut = $request->date_debut;
        $reservation->date_fin = $request->date_fin;
        $reservation->numero_chambre = $request->numero_chambre;
        $reservation->Nomclient = $request->Nomclient;
        $reservation->prix = $request->prix;
        $reservation->status = $request->status;
        $reservation->save();

        return redirect('/reservations');
    }
}
