<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerOrderHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'seller_id',
        'order_date',
        'status',
        'total_amount',
    ];

    function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    function orderDetails()
    {
        return $this->hasMany(SellerOrderDetail::class, 'seller_order_history_id');
    }
}
