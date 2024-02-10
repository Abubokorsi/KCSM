<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Models\Topbar;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team(){
      $guides=Guide::all();  
        return view('team', compact('guides'));
    }
}
