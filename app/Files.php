<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Files extends Model
{
    protected $table = 'files';
    protected $fillable = [
        'name',
        'path',
        'uuid',
        'hash',
    ];

    use SoftDeletes;
}
