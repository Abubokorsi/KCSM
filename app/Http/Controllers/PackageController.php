<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use App\Models\Topbar;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function package(){
        $destinations=Destination::all();
        $packages=Package::all();
        return view('package', compact('destinations', 'packages'));
    }
}
