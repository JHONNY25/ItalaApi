<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductsInCart extends Model
{
    protected $table = 'products_in_cart';
    protected $fillable = [
        'shopping_car_id',
        'product_id',
        'quantity',
    ];

    use SoftDeletes;

    public function shoopingCart(){
        return $this->belongsTo(shoopingcart::class,'shopping_car_id');
    }

    public function product(){
        return $this->belongsTo(Products::class,'product_id');
    }
}
