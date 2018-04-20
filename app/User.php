<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 
        'first_name', 
        'last_name',
        'city',
        'email', 
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];


    public function role(){
        return $this->belongsTo('App\Role');
    }

    //user/member has many businesses
    public function Businesses(){
        return $this->hasMany('App\Businesses');
    }


    // made on 4/12 May not be needed many to many relationship
    public function specials(){
        return $this->belongsToMany('App\Special');
    }


    public function comments(){
        return $this->hasMany('App\Comment');
    }


}





