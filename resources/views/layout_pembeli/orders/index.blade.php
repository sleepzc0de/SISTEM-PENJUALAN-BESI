@extends('layout_pembeli.master')

@section('content')
    <div class="container">
        <h2>Daftar Pesanan</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Tanggal Pesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->total_amount }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->order_date }}</td>
                        <td>
                            @if ($order->status == 'pending')
                                <a href="{{ route('payment.create', ['orderId' => $order->id]) }}"
                                    class="btn btn-primary">Buat Pembayaran</a>
                            @elseif ($order->status == 'confirmed')
                                <span class="text-muted">Pembayaran Selesai</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
