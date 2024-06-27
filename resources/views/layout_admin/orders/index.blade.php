@extends('layout_admin.master')

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
                    <th>ID</th>
                    <th>Penjual</th>
                    <th>Jumlah Barang</th>
                    <th>Total Jumlah</th>
                    <th>Status</th>
                    <th>Tanggal Pesanan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->seller->username }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total_amount }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->order_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
