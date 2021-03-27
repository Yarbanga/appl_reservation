<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date_reservatn;

class Admin_reservationController extends Controller
{
    public function admin_reserv(){
        
        return view('reservation/admin_reservation');
    }

    public function create(){
        
        return view('reservation/list',compact($date_reservatns));
    }

     public function store(Request $request)
    {
        request()->validate([
            'date'=> ['required','string'],
            'heure'=> ['required','string'],
            'localisation'=> ['required','string'],

          ]);

            Date_reservatn::create([
			'date'=>$request->date,
			'heure'=>$request->heure,
            'localisation'=>$request->localisation,
            ]);
            return redirect()->route('admin_index');
    }

     public function index(){

		$date_reservatns=Date_reservatn::all();

    	return view('reservation/list', compact('date_reservatns'));
    }
}
