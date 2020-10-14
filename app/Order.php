<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_name',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function orderPackage()
    {

        return $this->belongsToMany(Package::class);
    }
}
