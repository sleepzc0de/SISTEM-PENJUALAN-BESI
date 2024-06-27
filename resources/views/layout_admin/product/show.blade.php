@extends('layout_admin.master')

@section('content')
    <div class="container">
        <h1>Detail Produk</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $product->name }}</h2>
            </div>
            <div class="card-body">
                <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" class="img-fluid">
                <p><strong>Harga:</strong> Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                <p><strong>Deskripsi:</strong> {{ $product->description }}</p>
                <p><strong>Warna:</strong> {{ $product->color }}</p>
                <p><strong>Kuantitas:</strong> {{ $product->quantity }}</p>
            </div>
        </div>

        <a href="{{ route('product.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Produk</a>
    </div>
@endsection
