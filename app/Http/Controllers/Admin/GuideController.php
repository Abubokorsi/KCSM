<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guides=Guide::all();
        return view('admin.guide.index', compact('guides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guide.create');
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
            'postion' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'image' => 'required',
        ]);
        $image =$request->file('image');
        $slug =str_slug($request->name);
        if(isset($image)){
            $currentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/guide')){
                mkdir('uploads/guide', 007, true);
            }
            $image->move('uploads/guide', $imagename);

        }else{
            $imagename='default.png';
        }
        $guide =new Guide();
        $guide->name =$request->name;
        $guide->postion =$request->postion;
        $guide->twitter =$request->twitter;
        $guide->facebook =$request->facebook;
        $guide->instagram =$request->instagram;
        $guide->image =$imagename;
        $guide->save();
        return redirect()->route('guide.index');

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

        $guide=Guide::find($id);
        return view('admin.guide.edit', compact('guide'));
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
            'postion' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
        ]);
        $guide =Guide::find($id);
        $image =$request->file('image');
        $slug =str_slug($request->name);
        if(isset($image)){
            $currentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/guide')){
                mkdir('uploads/guide', 007, true);
            }
            $image->move('uploads/guide', $imagename);

        }else{
            $imagename=$guide->image;
        }
        
        $guide->name =$request->name;
        $guide->postion =$request->postion;
        $guide->twitter =$request->twitter;
        $guide->facebook =$request->facebook;
        $guide->instagram =$request->instagram;
        $guide->image =$imagename;
        $guide->save();
        return redirect()->route('guide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guide=Guide::find($id);
        if(file_exists('uploads/guide/'.$guide->image)){
            unlink('uploads/guide/'.$guide->image);
        }
        $guide->delete();

        return redirect()->route('guide.index');
    }
}
