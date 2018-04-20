<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessUser extends Model
{
        protected $fillable = [
    	'business_id',
    	'users_id',
    ];
}
