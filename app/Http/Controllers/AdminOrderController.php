<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\AdminOrder;
use Illuminate\Http\Request;
use App\Models\ProductPenjual;
use App\Models\AdminOrderDetail;
use Illuminate\Support\Facades\Auth;

class AdminOrderController extends Controller
{
    function create()
    {
        $products = ProductPenjual::with('seller')->get();
        return view('layout_admin.orders.create', compact('products'));
    }

    function store(Request $request)
    {
        $request->validate([
            'seller_id' => 'required|exists:users,id',
            'product_ids' => 'required|array|min:1',
            'product_ids.*' => 'required|exists:products,id',
            'product_quantities' => 'required|array|min:1',
            'product_quantities.*' => 'required|integer|min:1',
            'product_prices' => 'required|array|min:1',
            'product_prices.*' => 'required|numeric',
        ], [
            'product_ids.required' => 'Anda harus memilih setidaknya satu produk.',
            'product_ids.*.required' => 'ID produk diperlukan.',
            'product_ids.*.exists' => 'ID produk tidak valid.',
            'product_quantities.required' => 'Jumlah produk diperlukan.',
            'product_quantities.*.required' => 'Jumlah produk diperlukan.',
            'product_quantities.*.integer' => 'Jumlah produk harus berupa angka bulat.',
            'product_quantities.*.min' => 'Jumlah produk harus minimal 1.',
            'product_prices.*.required' => 'Harga produk diperlukan.',
            'product_prices.*.numeric' => 'Harga produk harus berupa angka.',
        ]);

        $totalAmount = 0;
        $products = [];

        foreach ($request->product_ids as $index => $productId) {
            if (isset($request->product_quantities[$index]) && isset($request->product_prices[$index])) {
                $quantity = $request->product_quantities[$index];
                $price = $request->product_prices[$index];
                $totalAmount += $quantity * $price;
                $products[] = [
                    'id' => $productId,
                    'quantity' => $quantity,
                    'price' => $price,
                ];
            }
        }


        // dd($products); 

        $adminOrder = AdminOrder::create([
            'admin_id' => Auth::id(),
            'seller_id' => $request->seller_id,
            'order_date' => now(),
            'status' => 'confirmed',
            'total_amount' => $totalAmount,
        ]);

        foreach ($products as $product) {
            AdminOrderDetail::create([
                'admin_order_id' => $adminOrder->id,
                'product_id' => $product['id'],
                'quantity' => $product['quantity'],
                'price' => $product['price'],
            ]);
        }

        return redirect()->route('orders.index')->with('success', 'Order berhasil dibuat.');
    }

    function index()
    {
        $orders = AdminOrder::with('orderDetails.product')->get();
        return view('layout_admin.orders.index', compact('orders'));
    }
}
