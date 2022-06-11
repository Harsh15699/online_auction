<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommodityAuction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'auction_starts_at',
        'auction_ends_at',
        'sold'
    ];
}
