@extends('layout_penjual.master')

@section('content')
    <div class="container">
        <h1>Detail Produk</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $productPenjual->name }}</h2>
            </div>
            <div class="card-body">
                <img src="{{ asset('storage/' . $productPenjual->photo) }}" alt="{{ $productPenjual->name }}"
                    class="img-fluid">
                <p><strong>Harga:</strong> Rp{{ number_format($productPenjual->price, 0, ',', '.') }}</p>
                <p><strong>Deskripsi:</strong> {{ $productPenjual->description }}</p>
                <p><strong>Warna:</strong> {{ $productPenjual->color }}</p>
                <p><strong>Kuantitas:</strong> {{ $productPenjual->quantity }}</p>
            </div>
        </div>

        <a href="{{ route('product_penjuals.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Produk</a>
    </div>
@endsection
