<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerOrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_order_history_id',
        'product_id',
        'quantity',
        'price',
    ];

    function sellerOrderHistory()
    {
        return $this->belongsTo(SellerOrderHistory::class, 'seller_order_history_id');
    }

    function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
