@extends('layout_admin.master')

@section('content')
    <div class="container mt-5">
        <h1>Edit Produk</h1>
        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="photo">Foto Produk</label>
                <input type="file" name="photo" class="form-control" id="photo">
                <img src="{{ asset('storage/' . $product->photo) }}" width="100" alt="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="price">Harga Produk</label>
                <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}"
                    required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Produk</label>
                <textarea name="description" class="form-control" id="description" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="color">Warna Produk</label>
                <input type="text" name="color" class="form-control" id="color" value="{{ $product->color }}"
                    required>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah Produk</label>
                <input type="number" name="quantity" class="form-control" id="quantity" value="{{ $product->quantity }}"
                    required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
