@extends('layout_pembeli.master')

@section('content')
    <div class="container">
        <h2>Histori Pembayaran</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID Pembayaran</th>
                    <th>ID Pesanan</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Jumlah</th>
                    <th>Metode Pembayaran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->order_id }}</td>
                        <td>{{ $payment->payment_date }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->payment_method }}</td>
                        <td>{{ $payment->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
