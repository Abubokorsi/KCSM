<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Destination;
use App\Models\Topbar;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(){
        $destinations=Destination::all();
        return view('booking',compact('destinations'));
    }

    public function stores(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'time' => 'required',
            'destination' => 'required',
            'person' => 'required',
            'message' => 'required',
        ]);
        $topbar=new Booking();
        $topbar->name=$request->name;
        $topbar->email=$request->email;
        $topbar->date=$request->date;
        $topbar->time=$request->time;
        $topbar->destination=$request->destination;
        $topbar->person=$request->person;
        $topbar->message=$request->message;
        $topbar->status=false;
        $topbar->save();

        return redirect()->back();
    }

}
