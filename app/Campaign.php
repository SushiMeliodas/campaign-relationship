<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    // protected $primaryKey = 'campaign_id';

    // public function campaignPackageProduct()
    // {
    //     return $this->belongsToMany(CampaignPackageProduct::class);
    // }
    protected $fillable = [
        'campaign_name',
    ];

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'campaign_package_products', 'package_id', 'campaign_id');
    }
}
