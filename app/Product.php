<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name', 'product_quantity', 'product_unit_price',
    ];

    public function packageProducts()
    {
        return $this->belongsToMany(Package::class, 'package_products');
    }

    // public function campaignPackageProduct()
    // {
    //     return $this->belongsToMany(CampaignPackageProduct::class);
    // }
}
