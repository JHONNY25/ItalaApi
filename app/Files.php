<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Files extends Model
{
    protected $table = 'files';
    protected $fillable = [
        'name',
        'product_id'
    ];

    use SoftDeletes;

    public function products(){
        return $this->belongsTo(Products::class,'product_id');
    }
}
