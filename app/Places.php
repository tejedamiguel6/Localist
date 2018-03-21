<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $fillable = [
    'image_path', 
    'business_name', 
    'address', 
    'phone_num', 
    'url',
	];
}
