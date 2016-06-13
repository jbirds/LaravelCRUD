<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = array('firstName', 'lastName', 'email', 'phone', 'birthday', 'address', 'city', 'state', 'zip');  
}
