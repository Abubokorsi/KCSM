<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations=Destination::all();
        
        return view('admin.destination.index', compact('destinations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destination.create');
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
            'price' => 'required',
            'day' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'details' => 'required',
            'image' => 'required',
        ]);
        $image =$request->file('image');
        $slug =str_slug($request->name);
        if(isset($image)){
            $currentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/destination')){
                mkdir('uploads/destination', 007, true);
            }
            $image->move('uploads/destination', $imagename);

        }else{
            $imagename='default.png';
        }
        $destination =new Destination();
        $destination->name =$request->name;
        $destination->price =$request->price;
        $destination->discount =$request->discount;
        $destination->details =$request->details;
        $destination->day =$request->day;
        $destination->person =$request->person;
        $destination->image =$imagename;
        $destination->save();
        return redirect()->route('destination.index');

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
        $destination=Destination::find($id);
        return view('admin.destination.edit', compact('destination'));

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
            'price' => 'required',
            'day' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'details' => 'required',
        ]);
        $destination =Destination::find($id);
        $image =$request->file('image');
        $slug =str_slug($request->name);
        if(isset($image)){
            $currentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/destination')){
                mkdir('uploads/destination', 007, true);
            }
            $image->move('uploads/destination/', $imagename);

        }else{
            $imagename=$destination->image;
        }
        $destination->name =$request->name;
        $destination->price =$request->price;
        $destination->discount =$request->discount;
        $destination->details =$request->details;
        $destination->person =$request->person;
        $destination->day =$request->day;
        $destination->image =$imagename;
        $destination->save();
        return redirect()->route('destination.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination=Destination::find($id);
        if(file_exists('uploads/destination/'.$destination->image)){
            unlink('uploads/destination/'.$destination->image);
        }
        $destination->delete();

        return redirect()->route('destination.index'); 

    }
}
