@extends('layout_penjual.master')

@section('content')
    <h2>Supplier Product</h2>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Warna</th>
                <th>Kuantitas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productPenjual as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        @if ($product->photo)
                            <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" width="50">
                        @else
                            Gambar tidak tersedia
                        @endif
                    </td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->color }}</td>
                    <td>{{ $product->quantity }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Tidak ada produk yang ditemukan</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('product_penjuals.create') }}" class="btn btn-info">Tambah Produk</a>
@endsection
