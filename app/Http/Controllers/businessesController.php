<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;

//custom import for Auth
use Illuminate\Support\Facades\Auth;

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
        return view('businesses.create');
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
        if(Auth::check()){
            $businesses = Business::create([
                'business_name' => $request->input('business_name'),
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                // 'zip' => $request->input('zip'),
                // 'phone_num' => $request->input('phone_num'),
                // 'url' => $request->input('url'),
                // 'contact_first_name' => $request->input('contact_first_name'),
                // 'contact_last_name' => $request->input('contact_last_name'),
                'user_id' => Auth::user()->id
            ]);


            if ($businesses){
                return redirect()->route('businesses.show', ['businesses' => $businesses->id ])
                ->with('Success', 'Business has been created');
            }
        }

            return back()->withInput()->with('error', 'Error creating business');
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
        
        $findBusiness = Business::find($business->id);
        if ($findBusiness->delete()){
            //redirect
            return redirect()->route('businesses.index')->with('success', 'Business deleted succesfully');

        }

        return back()->withInput()->with('error', 'Business could not be deleted');
    }
}
