<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name', 'customer_email', 'customer_contact_no',
    ];

    public function orderCustomer()
    {
        return $this->belongsToMany(Package::class, 'order_customer');
        // return $this->belongsToMany(Package::class, 'campaign_package_products', 'package_id', 'campaign_id');
    }
}
