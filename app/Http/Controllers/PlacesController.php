<?php

namespace App\Http\Controllers;

use App\Places;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function getIndex()
    {
    	$places = Places::all();
    	return view('pages.index', ['places' => $places]);
    }

    

}

