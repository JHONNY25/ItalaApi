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
        'payments_methods_user_id',
        'price',
        'quantity',
        'purchases_date',
    ];

    use SoftDeletes;

    public function paymentsmethods(){
        return $this->belongsTo(PaymentsMethodsUser::class,'payments_methods_user_id');
    }

    public function product(){
        return $this->belongsTo(Products::class,'product_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
