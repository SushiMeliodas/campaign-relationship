<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_name',
    ];

    public function orderCampaign()
    {
        return $this->belongsToMany(Package::class, 'order_campaign');
        // return $this->belongsToMany(Package::class, 'campaign_package_products', 'package_id', 'campaign_id');
    }

    public function orderCustomer()
    {
        return $this->belongsToMany(Package::class, 'order_customer');
        // return $this->belongsToMany(Package::class, 'campaign_package_products', 'package_id', 'campaign_id');
    }
}
