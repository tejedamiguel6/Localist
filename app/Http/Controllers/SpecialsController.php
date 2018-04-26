<?php

namespace App\Http\Controllers;

use App\Special;
use Illuminate\Http\Request;

//custom import for Auth
use Illuminate\Support\Facades\Auth;

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
            return view('specials.index', ['specials' => $specials]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request )
    {
        $selected = null;

        if ($request->selected) {
            $selected = $request->selected;
        }
        $businesses = Auth::user()->businesses;
        $businessesArray = [];

        foreach ($businesses  as $business) {
            $businessesArray = $businessesArray + [$business->id => $business->business_name];
;        }

        //dd($businessesArray);
        // dump(Auth::user()->id);
        // $businesses = null;
        // if(!$business_id) {
        //     $businesses = Business::where('user_id', Auth::user()->id)->get();
        // }
        //defined special_id variable here?
        return view('specials.create')
            ->with(compact('businesses'))
            ->with(compact('businessesArray'))
            ->with(compact('selected'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->except('_token');

        $special = Special::create($data);

        if ($special){
            return redirect()->route('specials.show', ['special' => $special->id ])
                ->with('Success', 'special has been created');
        }

        return back()->with('error', 'Something went wrong. Please try again.');
        if(Auth::check()){
            $specials = Special::create([
            'monday' => $request->input('monday'),
            'tuesday' => $request->input('tuesday'),
            'wednesday' => $request->input('wednesday'),
            'thursday' => $request->input('thursday'),
            'friday' => $request->input('friday'),
            'saturday' => $request->input('saturday'),
            'sunday' => $request->input('sunday'),
            'business_id' => $request->input('business_id'),
            'business_id' => $request->user()->id
            ]);

            if ($specials){
                return redirect()->route('specials.show', ['specials' => $specials->id ])
                ->with('Success', 'special has been created');
            }
        }

             return back()->withInput()->with('errors', 'Error creating new project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function show($special_id)
    {
                //dump(Auth::user()->id);
        $special = Special::where('id', $special_id)->first();

         //$specials = Special::find($special ->id );
        return view('specials.show')
            ->with(compact('special'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function edit(Special $special)
    {

        $specials = Special::find($special ->id );
        return view('specials.edit', ['specials' => $specials]);

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
        if(Auth::check() ){
        $specialsUpdate = Special::where('id', $special->id)->update([
            'monday' => $request->input('monday'),
            'tuesday' => $request->input('tuesday'),
            'wednesday' => $request->input('wednesday'),
            'thursday' => $request->input('thursday'),
            'friday' => $request->input('friday'),
            'saturday' => $request->input('saturday'),
            'sunday' => $request->input('sunday'),
        ]);
        
            // dump(Auth::user()->id);
        $specials = Special::where('business_id', Auth::user()->id)->get();
        if($specialsUpdate){
            return redirect()->route('specials.show',['special'=>$special->id])
            ->with('success', 'Company updated Succesfully');
        }
    }

        //redirect
        return back()->withInput();

    } //end public function

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function destroy(Special $special)
    {
         $findSpecial = Special::find($special->id);
        if ($findSpecial->delete()){
            //redirect
            return redirect()->route('businesses.index')->with('success', 'special deleted succesfully');
        }

        return back()->withInput()->with('error', 'special could not be deleted');
    }
    
}
