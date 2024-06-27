@extends('layout_penjual.master')
@section('content')
    <div class="container mt-5">
        <h1>Tambah Produk</h1>
        <form action="{{ route('product_penjuals.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="photo">Foto Produk</label>
                <input type="file" name="photo" class="form-control" id="photo" required>
            </div>
            <div class="form-group">
                <label for="price">Harga Produk</label>
                <input type="number" name="price" class="form-control" id="price" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Produk</label>
                <textarea name="description" class="form-control" id="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="color">Warna Produk</label>
                <input type="text" name="color" class="form-control" id="color" required>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah Produk</label>
                <input type="number" name="quantity" class="form-control" id="quantity" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
