<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name', 'customer_email', 'customer_contact_no',
    ];

    public function address()
    {
        return $this->hasMany(Address::class, 'address');
    }

    public function orders()
    {
        return $this->belongsTo(Order::class, 'orders');
    }
}
