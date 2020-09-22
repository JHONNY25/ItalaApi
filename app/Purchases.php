<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchases extends Model
{
    protected $table = 'purchases';
    protected $fillable = [
        'product_id',
        'user_id',
        'user_payments_methods_id',
        'price',
        'quantity',
        'purchases_date',
    ];

    use SoftDeletes;

    public function userPaymentsMethods(){
        return $this->belongsTo(UserPaymentsMethods::class,'user_payments_methods_id');
    }

    public function product(){
        return $this->belongsTo(Products::class,'product_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
