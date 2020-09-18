<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductComments extends Model
{
    protected $table = 'products_comments';
    protected $fillable = [
        'product_id',
        'user_id',
        'comment',
    ];

    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function product(){
        return $this->belongsTo(Products::class,'product_id');
    }
}
