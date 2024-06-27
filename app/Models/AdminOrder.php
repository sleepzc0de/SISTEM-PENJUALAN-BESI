<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOrder extends Model
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
        return $this->hasMany(AdminOrderDetail::class, 'admin_order_id');
    }

    // Accessor for total quantity
    function getQuantityAttribute()
    {
        return $this->orderDetails->sum('quantity');
    }
}
