<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductScore extends Model
{
    protected $table = 'product_score';
    protected $fillable = [
        'product_id',
        'user_id',
        'score',
    ];

    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function product(){
        return $this->belongsTo(Products::class,'product_id');
    }
}
