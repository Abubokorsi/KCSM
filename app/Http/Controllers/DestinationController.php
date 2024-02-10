<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Topbar;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function destination(){
        
        $destinations=Destination::all();
        return view('destination', compact('destinations'));
    }
}
