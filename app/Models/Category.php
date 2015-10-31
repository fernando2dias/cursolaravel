<?php

namespace CodeDelivery\Models;
use CodeDelivery\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
	'name'  
    ];

    public function products(){
    	return $this->hasMany(Product::class);
    }
}


