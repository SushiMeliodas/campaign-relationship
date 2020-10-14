<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'campaign_name',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'orders');
    }

    public function campaignPackages()
    //$campaign->campaignPackageProducts
    {
        return $this->belongsToMany(Package::class);
        // return $this->belongsToMany(Package::class, 'campaign_package_products', 'package_id', 'campaign_id');
    }
}
