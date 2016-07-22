<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductType;

class Product extends Model
{
    protected $fillable = [
        'title', 'price', 'description','propuct_type',
    ];

    public function prod_type(){
        return $this->hasMany(ProductType::class);
    }
}
