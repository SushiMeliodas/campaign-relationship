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

    public function packageProducts()
    {
        return $this->belongsToMany(Product::class);
    }
}
