<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    protected $table = 'address';
    protected $fillable = [
        'street',
        'colony',
        'country',
        'postcard_code',
        'user_id',
    ];

    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
