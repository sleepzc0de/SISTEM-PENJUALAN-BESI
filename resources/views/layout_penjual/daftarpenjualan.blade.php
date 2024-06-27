@extends('layout_penjual.master')

@section('content')
    <h2>Dashboard Penjual</h2>
    <h5>Histori Pesanan dari Admin</h5>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Tanggal Pesanan</th>
                <th>Status</th>
                <th>Total Jumlah</th>
                <th>Detail Produk</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->total_amount }}</td>
                    <td>
                        <ul>
                            @foreach ($order->orderDetails as $detail)
                                <li>{{ $detail->product->name }} - {{ $detail->quantity }} x {{ $detail->price }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tidak ada histori pesanan yang ditemukan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
