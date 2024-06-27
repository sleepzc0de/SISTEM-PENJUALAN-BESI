<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_order_id',
        'product_id',
        'quantity',
        'price',
    ];

    function adminOrder()
    {
        return $this->belongsTo(AdminOrder::class, 'admin_order_id');
    }

    function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
