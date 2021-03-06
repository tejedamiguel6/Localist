<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
    'image_path', 
    'business_name', 
    'user_id', 
    'state_id', 
    'special_id', 
    'street', 
    'city', 
    'zip', 
    'phone_num', 
    'url', 
    'contact_first_name', 
    'contact_last_name',
	];

	public function users(){
		return $this->belongsTo('App\User');
	}

	//may cause issues
	public function states(){
		return $this->belongsTo('App\State');
	}

	public function specials(){
		return $this->hasMany('App\Special');
	}

}
