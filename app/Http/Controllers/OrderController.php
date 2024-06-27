<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        $products = Product::with('seller')->get();
        return view('layout_pembeli.orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'seller_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
        ], [
            'product_id.required' => 'Anda harus memilih satu produk.',
            'product_id.exists' => 'ID produk tidak valid.',
            'quantity.required' => 'Jumlah produk diperlukan.',
            'quantity.integer' => 'Jumlah produk harus berupa angka.',
            'quantity.min' => 'Jumlah produk harus minimal 1.',
            'price.required' => 'Harga produk diperlukan.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk harus lebih besar dari 0.',
        ]);

        Order::create([
            'buyer_id' => Auth::id(),
            'seller_id' => $request->seller_id,
            'order_date' => now(),
            'status' => 'pending',
            'total_amount' => $request->quantity * $request->price,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect()->route('order.index')->with('success', 'Order berhasil dibuat.');
    }

    public function index()
    {
        $orders = Order::with(['buyer', 'seller', 'product'])->where('buyer_id', auth()->id())->get();
        return view('layout_pembeli.orders.index', compact('orders'));
    }
}
