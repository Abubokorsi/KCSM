<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::all();
        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
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
            'name' => 'required',
            'address' => 'required',
            'details' => 'required',
            'image' => 'required',
        ]);
        $image =$request->file('image');
        $slug =str_slug($request->name);
        if(isset($image)){
            $currentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/client')){
                mkdir('uploads/client', 007, true);
            }
            $image->move('uploads/client', $imagename);

        }else{
            $imagename='default.png';
        }
        $client =new Client();
        $client->name =$request->name;
        $client->address =$request->address;
        $client->details =$request->details;
        $client->image =$imagename;
        $client->save();
        return redirect()->route('client.index');
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
        $client=Client::find($id);
        return view('admin.client.edit', compact('client'));
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
            'name' => 'required',
            'address' => 'required',
            'details' => 'required',
        ]);
        $client =Client::find($id);
        $image =$request->file('image');
        $slug =str_slug($request->name);
        if(isset($image)){
            $currentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/client')){
                mkdir('uploads/client', 007, true);
            }
            $image->move('uploads/client', $imagename);

        }else{
            $imagename=$client->image;
        }
        
        $client->name =$request->name;
        $client->address =$request->address;
        $client->details =$request->details;
        $client->image =$imagename;
        $client->save();
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=Client::find($id);
        if(file_exists('uploads/client/'.$client->image)){
            unlink('uploads/client/'.$client->image);
        }
        $client->delete();

        return redirect()->route('client.index');
    }
}
