<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionContextPass;

class Package extends Model
{
    // protected $primaryKey = 'package_id';

    protected $fillable = [
        'package_name', 'package_quantity', 'package_unit_price',
    ];

    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaign_package_products', 'package_id', 'campaign_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'campaign_package_products', 'package_id', 'product_id');
    }


    // public function campaignPackageProduct()
    // {
    //     return $this->belongsToMany(CampaignPackageProduct::class);
    // }
}
