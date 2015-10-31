<?php

namespace CodeDelivery\Models;
use CodeDelivery\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
	'category_id',
	'name',
	'description',
	'price'  
    ];

    public function category(){
    	return $this->belongsTo(Category::class);
    }
}
