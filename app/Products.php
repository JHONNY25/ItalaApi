<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'file_id',
        'category_id',
    ];

    use SoftDeletes;

    public function file(){
        return $this->belongsTo(Files::class,'file_id');
    }

    public function category(){
        return $this->belongsTo(Categories::class,'category_id');
    }
}
