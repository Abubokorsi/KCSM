<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topbar;
use Illuminate\Http\Request;

class TopbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topbars=Topbar::all();
        return view('admin.topbar.index', compact('topbars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.topbar.create');
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
            'phone' => 'required',
            'email' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);
        $topbar=new Topbar();
        $topbar->location=$request->location;
        $topbar->phone=$request->phone;
        $topbar->email=$request->email;
        $topbar->twitter=$request->twitter;
        $topbar->facebook=$request->facebook;
        $topbar->linkedin=$request->linkedin;
        $topbar->instagram=$request->instagram;
        $topbar->youtube=$request->youtube;
        $topbar->save();

        return redirect()->route('topbar.index');

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
        $topbar=Topbar::find($id);
        return view('admin.topbar.edit', compact('topbar'));
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
            'phone' => 'required',
            'email' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);
        $topbar=Topbar::find($id);
        $topbar->location=$request->location;
        $topbar->phone=$request->phone;
        $topbar->email=$request->email;
        $topbar->twitter=$request->twitter;
        $topbar->facebook=$request->facebook;
        $topbar->linkedin=$request->linkedin;
        $topbar->instagram=$request->instagram;
        $topbar->youtube=$request->youtube;
        $topbar->save();

        return redirect()->route('topbar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Topbar::find($id)->delete();
        return redirect()->route('topbar.index');
    }
}
