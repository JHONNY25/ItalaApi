<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserPaymentsMethods extends Model
{
    protected $table = 'payments_methods_user';
    protected $fillable = [
        'payment_method_id',
        'user_id',
        'card_number',
        'name_number',
    ];

    use SoftDeletes;

    public function paymentMethod(){
        $this->belongsTo(PaymentMethod::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
