<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::id()){

            $is_admin=Auth()->user()->is_admin;

            if($is_admin == 1){
                return view('admin.dashboard');
            }elseif($is_admin==0){
                $user_profiles=UserProfile::all();
                return view('dashboard', compact('user_profiles'));
            }else{
                return redirect()->back();
            }
        }
        
    }
}
