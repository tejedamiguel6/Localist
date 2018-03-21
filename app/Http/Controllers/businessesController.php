<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;

class BusinessesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $businesses = Business::all();
            return view('businesses.index', ['businesses' => $businesses]);
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
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        $businesses = Business::find($business ->id );
        return view('businesses.show', ['businesses' => $businesses]);

        // $special = Special::find($specials->monday);
        // return view('busineness.show', ['specials' => $specials]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        //
        $businesses = Business::find($business ->id );
        return view('businesses.edit', ['businesses' => $businesses]);

        //specials database input
        $specials = special::find($specials ->monday );
        return view('businesses.edit', ['businesses' => $businesses]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        //save data

        // $businessUpdate = Business::where('id', $business->id)
        // ->update([
        //     'business_name' => $request->input('name'),
        //     'city' => $request->input('city'),
        // ]);
        // if($businessUpdate){
        //     return redirect()->route('businesses.show',['business'=>$business->id])
        //     ->with('success', 'Company updated Succesfully');
        // }

        // //redirect
        // return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        //
    }
}
