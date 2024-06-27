@extends('layout_penjual.master')

@section('content')
    <div class="container mt-5">
        <h1>Daftar Produk</h1>
        <a href="{{ route('product_penjuals.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Warna</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productPenjual as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td><img src="{{ asset('storage/' . $product->photo) }}" width="100" alt="{{ $product->name }}">
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <a href="{{ route('product_penjuals.show', $product->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('product_penjuals.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('product_penjuals.destroy', $product->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
