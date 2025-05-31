<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseProduct extends Model
{
    protected $fillable = [
        'product_name',
        'unit',
        'unit_type',
        'price',
        'reqisition_no',
        'vendor_name',
        'brand_name',
        'address',
        'phone'
    ];

}
