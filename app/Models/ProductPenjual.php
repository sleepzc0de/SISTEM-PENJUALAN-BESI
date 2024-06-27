<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPenjual extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'photo', 'price', 'description', 'color', 'quantity', 'seller_id',
    ];

    function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
