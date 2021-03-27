<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function membre()
    {
        return view('apprenant.espace');
    }
     public function espace_reservation()
    {       
        return view('reservation.reservation');
    }
     public function reservt_list()
    {
        return view('reservation.list');
    }

    public function store(Request $request)
    {
        request()->validate([
            'nom'=> ['required','string'],
            'prenom'=> ['required','string'],
            'genre'=> ['required','string'],
            'date_de_debut'=> ['required','string'],
            'date_de_fin'=> ['string'],
          ]);

            Reservation::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'genre'=>$request->genre,
            'date_de_debut'=>$request->date_de_debut,
            'date_de_fin'=>$request->date_de_fin,
            ]);
            return redirect()->route('apprnt_index');
    }

     public function index(){

        $Reservations=Reservation::all();

        return view('reservation.reservation_apprenant', compact('Reservations'));
    }
}
