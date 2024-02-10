<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Topbar;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        $clients=Client::all();
        return view('service', compact('clients'));
    }
}
