<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Topbar;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial(){
        $clients=Client::all();
        return view('testimonial', compact('clients'));
    }
}
