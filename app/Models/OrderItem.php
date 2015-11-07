<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class OrderItem extends Model implements Transformable
{
    protected $fillable = [
    'product_id',
    'order_id',
    'price',
    'qtd'  
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function produtct(){
        return $this->belongsTo(Product::class);
    }

}
