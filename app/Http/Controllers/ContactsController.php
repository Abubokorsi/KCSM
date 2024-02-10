<?php

namespace App\Http\Controllers;

use App\Mail\ReviewMail;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function contact(){
        $contacts=Contact::all();
        return view('contact', compact('contacts'));
    }
    public function stores(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $message=new Message();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->subject=$request->subject;
        $message->message=$request->message;
        $message->status=false;
        $message->save();
       

        return redirect()->back();
        
    
    }

    
}
