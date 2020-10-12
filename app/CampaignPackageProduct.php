<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignPackageProduct extends Model
{
    protected $fillable = [
        'campaign_id', 'package_id', 'product_id',
    ];

    // public function campaign()
    // {
    //     return $this->belongsToMany(Campaign::class);
    // }

    // public function package()
    // {
    //     return $this->belongsToMany(Package::class);
    // }

    // public function product()
    // {
    //     return $this->belongsToMany(Product::class);
    // }
}
