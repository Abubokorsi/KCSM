<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Destination;
use App\Models\Guide;
use App\Models\Package;
use App\Models\Topbar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        
        $destinations=Destination::all();
        $packages=Package::all();
        $guides=Guide::all();
        $clients=Client::all();
        return view('home', compact('destinations','packages', 'guides', 'clients'));
    }
}
