<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Models\Topbar;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $guides=Guide::all();
        return view('about', compact('guides'));
    }
}
