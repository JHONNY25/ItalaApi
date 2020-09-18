<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description',
    ];

    use SoftDeletes;

}
