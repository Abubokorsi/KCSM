<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'map' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'details' => 'required',
        ]);
        $contact=new Contact();
        $contact->map=$request->map;
        $contact->location=$request->location;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->details=$request->details;
        $contact->save();

        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact=Contact::find($id);
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'map' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'details' => 'required',
        ]);
        $contact=Contact::find($id);
        $contact->map=$request->map;
        $contact->location=$request->location;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->details=$request->details;
        $contact->save();

        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact.index');
    }
}
