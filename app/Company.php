<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

     protected $fillable = [
        'name',
        'address_address',
        'address_latitude',
        'address_longitude',
    ];
}
