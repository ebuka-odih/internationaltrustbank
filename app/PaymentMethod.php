<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment_method()
    {
        if ($this->payment_type == 1)
        {
            return "Bank Transfer";
        }elseif ($this->payment_type == 2)
        {
            return "Bitcoin Deposit";
        }else{
            return "Instant Payment";
        }
    }
}
