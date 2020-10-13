<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'campaign_name',
    ];

    public function campaignPackages()
    //$campaign->campaignPackageProducts
    {
        return $this->belongsToMany(Package::class, 'campaign_packages');
        // return $this->belongsToMany(Package::class, 'campaign_package_products', 'package_id', 'campaign_id');
    }
}
