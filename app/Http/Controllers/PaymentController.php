<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PaymentController extends Controller
{
    function index()
    {
        $payments = Payment::all();
        return view('layout_pembeli.payment.index', compact('payments'));
    }

    function create(Request $request)
    {
        $orders = Order::where('buyer_id', auth()->id())
            ->where('status', '!=', 'confirmed')
            ->with('product')
            ->get();
        return view('layout_pembeli.payment.create', compact('orders'));
    }

    function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'amount' => 'required|numeric',
            'payment_method' => 'required|string',
            'status' => 'required|string',
        ]);

        Payment::create([
            'order_id' => $request->order_id,
            'payment_date' => now(),
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'status' => $request->status,
        ]);

        // Update order status if payment is completed
        if ($request->status == 'completed') {
            $order = Order::find($request->order_id);
            $order->status = 'confirmed';
            $order->save();
        }

        return redirect()->route('order.index')->with('success', 'Pembayaran berhasil dilakukan.');
    }
}
