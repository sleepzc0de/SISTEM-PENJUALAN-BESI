<?php

namespace App\Http\Controllers;

use App\Models\AdminOrder;
use Illuminate\Http\Request;
use App\Models\ProductPenjual;
use App\Models\SellerOrderHistory;
use Illuminate\Support\Facades\Auth;

class PenjualDashboardController extends Controller
{
    function index()
    {
        $productPenjual = ProductPenjual::where('seller_id', auth()->id())->get();
        return view('dashboard_penjual', compact('productPenjual'));
    }

    function historipenjual()
    {
        $seller_id = Auth::id();
        $orders = AdminOrder::where('seller_id', $seller_id)
            ->with('orderDetails.product')
            ->get();

        return view('layout_penjual.daftarpenjualan', compact('orders'));
    }

    function profiperusahaan()
    {
        return view('layout_penjual.profilperusahaan');
    }
}
