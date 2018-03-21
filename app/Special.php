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

    public function businesses(){
        return $this->belongsTo('App\Businesses');
    }



}

