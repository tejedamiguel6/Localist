<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    protected $fillable = [
    	'description',
    	'business_id',
    	'start_date',
    	'end_date',
    	'monday',
    	'tuesday',
    	'wednesday',
    	'thursday',
    	'friday',
    	'saturday',
    	'sunday',
    ];


// function made on 4/12/ May not work 
    public function users(){
        return $this->belongsToMany('App\User');
    }



    public function business(){
        return $this->belongsTo('App\Business');
    }



}

