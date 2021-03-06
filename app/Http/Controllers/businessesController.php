<?php

namespace App\Http\Controllers;

use App\Business;
use App\User;
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
    
        if(Auth::check()){
            $businesses = Business::create([
                'business_name' => $request->input('business_name'),
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                'zip' => $request->input('zip'),
                // 'phone_num' => $request->input('phone_num'),
                'url' => $request->input('url'),
                // 'contact_first_name' => $request->input('contact_first_name'),
                // 'contact_last_name' => $request->input('contact_last_name'),
                'user_id' => $request->user()->id
            ]);


            if ($businesses){
                return redirect()->route('businesses.show', ['businesses' => $businesses->id ])
                ->with('Success', 'Business has been created');
            }
        }

            return back()->withInput()->with('errors', 'Error creating business');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        $business = Business::where('id', $business->id)->first();
        return view('businesses.show')
            ->with(compact('business'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $business = Business::find($id);
        return view('businesses.edit')
            ->with(compact('business'));
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
         if(Auth::check() ){
            $businesses = Business::where('user_id', Auth::user()->id)->get();
            $findBusiness = Business::find($business->id);
        if ($findBusiness->delete()){
            //redirect
            return redirect()->route('businesses.index')->with('success', 'Business deleted succesfully');
            return view('businesses.index', ['businesses' => $businesses]);
        }
        }

        return back()->withInput()->with('error', 'Business could not be deleted');
    }

    public function userIndex()
    {
        $businesses = Auth::user()->businesses;

        return view('businesses.my-businesses')
            ->with(compact('businesses'));
    }





   
}
