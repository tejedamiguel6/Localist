<?php

namespace App\Http\Controllers;

use App\Special;
use Illuminate\Http\Request;

class SpecialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $specials = Special::all();
            return view('businesses.index', ['specials' => $specials]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function show(Special $special)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function edit(Special $special)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Special $special)
    {
        $businessUpdate = Special::where('id', $special->id)->update([
            'monday' => $request->input('monday'),
            'tuesday' => $request->input('tuesday'),
            'wednesday' => $request->input('wednesday'),
            'thursday' => $request->input('thursday'),
            'friday' => $request->input('friday'),
            'saturday' => $request->input('saturday'),
            'sunday' => $request->input('sunday'),
        ]);
        if($businessUpdate){
            return redirect()->route('businesses.show',['special'=>$special->id])
            ->with('success', 'Company updated Succesfully');
        }

        //redirect
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function destroy(Special $special)
    {
        //
    }
}
