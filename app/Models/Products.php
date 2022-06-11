<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'product_name',
        'brand',
        'description',
        'MRP',
        'discount',
        'base_price',
        'size',
        'category',
        'product_image',
        'verified',
        'sold',
        'sold_price',
        'buyer_id'
    ];
}
