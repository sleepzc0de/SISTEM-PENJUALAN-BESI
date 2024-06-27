@extends('layout_pembeli.master')

@section('content')
    <div class="container">
        <h2>Pesan Barang</h2>
        <form id="orderForm" action="{{ route('order.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="seller_id">Pilih Penjual</label>
                <select name="seller_id" id="seller_id" class="form-control" required>
                    @foreach ($products->groupBy('seller_id') as $sellerId => $sellerProducts)
                        <option value="{{ $sellerId }}">{{ $sellerProducts->first()->seller->username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Pilih Produk</label>
                <select name="product_id" id="product_id" class="form-control" required>
                    <option value="" disabled selected>Pilih Produk</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->name }}
                            (Rp.{{ $product->price }})
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
            </div>
            <input type="hidden" name="price" id="price">
            <button type="submit" class="btn btn-primary mt-3">Pesan</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <script>
        document.getElementById('product_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var price = selectedOption.getAttribute('data-price');
            document.getElementById('price').value = price;
        });
    </script>
@endsection
