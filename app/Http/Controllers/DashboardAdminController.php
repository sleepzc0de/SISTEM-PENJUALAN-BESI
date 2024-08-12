<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    function riwayat()
    {
        $riwayats = Order::with(['buyer', 'seller', 'product'])->where('buyer_id', auth()->id())->get();
        return view('dashboard_admin', compact('riwayats'));
    }
}
