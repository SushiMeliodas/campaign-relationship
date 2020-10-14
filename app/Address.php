<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address_1', 'address_2', 'address_postcode', 'address_city', 'address_state',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'orders');
    }
}
