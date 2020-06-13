<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\User as Authenticatable;
 


class Student extends Authenticate
{
     use Notifiable;
 
    protected $guard = 'student';
 
    protected $fillable = [
        'name', 'admissionNo', 'email', 'password','programme_id','session','status',
    ];
 
    protected $hidden = [
        'password', 'remember_token',
    ];
}
 