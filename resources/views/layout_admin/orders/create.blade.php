@extends('layout_admin.master')

@section('content')
    <div class="container">
        <h2>Pesan Barang</h2>
        <form id="orderForm" action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="seller_id">Pilih Penjual</label>
                <select name="seller_id" id="seller_id" class="form-control" required>
                    @foreach ($products->groupBy('seller_id') as $sellerId => $sellerProducts)
                        <option value="{{ $sellerId }}">{{ $sellerProducts->first()->seller->username }}</option>
                    @endforeach
                </select>
            </div>
            <div id="products-container">
                <h4>Produk</h4>
                @foreach ($products as $index => $product)
                    <div class="product-item">
                        <label>
                            <input type="checkbox" name="product_ids[{{ $index }}]" value="{{ $product->id }}"
                                data-index="{{ $index }}">
                            {{ $product->name }} ({{ $product->price }})
                        </label>
                        <input type="number" name="product_quantities[{{ $index }}]" placeholder="Jumlah"
                            min="1" class="form-control" disabled data-index="{{ $index }}">
                        <input type="hidden" name="product_prices[{{ $index }}]" value="{{ $product->price }}"
                            data-index="{{ $index }}">
                    </div>
                @endforeach
            </div>
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
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const index = this.getAttribute('data-index');
                const quantityInput = document.querySelector(`input[name="product_quantities[${index}]"]`);
                quantityInput.disabled = !this.checked;
                if (this.checked) {
                    quantityInput.value = price;
                } else {
                    quantityInput.value = '';
                }
            });
        });

        document.getElementById('orderForm').addEventListener('submit', function(e) {
            const checkedProducts = document.querySelectorAll('input[type="checkbox"]:checked');
            if (checkedProducts.length === 0) {
                alert('Anda harus memilih setidaknya satu produk.');
                e.preventDefault();
            } else {
                document.querySelectorAll('input[type="checkbox"]:not(:checked)').forEach(checkbox => {
                    const index = checkbox.getAttribute('data-index');
                    const quantityInput = document.querySelector(
                        `input[name="product_quantities[${index}]"]`);
                    quantityInput.disabled = true;
                });
            }
        });
    </script>
@endsection
