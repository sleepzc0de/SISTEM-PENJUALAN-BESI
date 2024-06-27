@extends('layout_admin.master')
@section('content')
    <div class="container">
        <h2>Dashboard</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Statistik Penjualan</h4>
                    </div>
                    <div class="card-body">
                        <p>Total penjualan bulan ini: Rp9.000.000</p>
                        <p>Total pesanan bulan ini: 34</p>
                        <p>Rata-rata nilai pesanan: Rp1.000.000 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Produk terbaru yang akan datang</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Plafon PVC</li>
                            <li>Tangga Besi DXL 8 Steps (200CM)</li>
                            <li>DBS Basin Cabinet</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h4>Pesanan Terbaru</h4>
            </div>
            <div class="card-body">
                <ul>
                    <li>Tangga Model Melingkar</li>
                    <li>Pintu Besi</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
