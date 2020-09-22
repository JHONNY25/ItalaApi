<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShoppingCart extends Model
{
    protected $table = 'shopping_cart';
    protected $fillable = [
        'user_id',
    ];

    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function productsInCart(){
        return $this->hasMany(ProductsInCart::class);
    }
}
