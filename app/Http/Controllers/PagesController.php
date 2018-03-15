<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	

    public function index() {
    	return view ('pages.index');
    }

    public function asheville() {
    	return view ('pages.asheville');
    }


	public function about() {
    	return view ('pages.about');
    }

    public function southern(){
        return view('pages.southern');
    }





}
