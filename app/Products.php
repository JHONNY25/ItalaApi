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
        'category_id',
    ];

    use SoftDeletes;

    public function files(){
        return $this->hasMany(Files::class,'product_id');
    }

    public function category(){
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function productsComments(){
        return $this->hasMany(ProductComments::class,'product_id');
    }

    public function productScore(){
        return $this->hasMany(ProductScore::class,'product_id');
    }
}
