<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialUser extends Model
{
      protected $fillable = [
    	'specials_id',
    	'users_id',
    ];
}
