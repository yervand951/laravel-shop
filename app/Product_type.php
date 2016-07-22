<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producttype extends Model
{
    protected $fillable = [
        'id','name','parent',
    ];
}
