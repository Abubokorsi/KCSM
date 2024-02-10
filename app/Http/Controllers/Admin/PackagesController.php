<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages=Package::all();
        return view('admin.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
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
            'location' => 'required',
            'price' => 'required',
            'day' => 'required',
            'person' => 'required',
            'details' => 'required',
            'image' => 'required',
        ]);
        $image =$request->file('image');
        $slug =str_slug($request->location);
        if(isset($image)){
            $currentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/package')){
                mkdir('uploads/package', 007, true);
            }
            $image->move('uploads/package', $imagename);

        }else{
            $imagename='default.png';
        }
        $package =new Package();
        $package->location =$request->location;
        $package->price =$request->price;
        $package->details =$request->details;
        $package->day =$request->day;
        $package->person =$request->person;
        $package->image =$imagename;
        $package->save();
        return redirect()->route('package.index');
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
        $package=Package::find($id);
        return view('admin.package.edit', compact('package'));
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
            'location' => 'required',
            'price' => 'required',
            'day' => 'required',
            'person' => 'required',
            'details' => 'required',
        ]);
        $package =Package::find($id);
        $image =$request->file('image');
        $slug =str_slug($request->location);
        if(isset($image)){
            $currentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/package')){
                mkdir('uploads/package', 007, true);
            }
            $image->move('uploads/package', $imagename);

        }else{
            $imagename=$package->image;
        }
        $package->location =$request->location;
        $package->price =$request->price;
        $package->details =$request->details;
        $package->day =$request->day;
        $package->person =$request->person;
        $package->image =$imagename;
        $package->save();
        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package=Package::find($id);
        if(file_exists('uploads/package/'.$package->image)){
            unlink('uploads/package/'.$package->image);
        }
        $package->delete();

        return redirect()->route('package.index'); 

    }
}
