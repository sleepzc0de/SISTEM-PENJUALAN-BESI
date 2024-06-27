@extends('layout_pembeli.master')

@section('content')
    <div class="container">
        <h2>Form Pembayaran</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('payment.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="order_id" class="form-label">Pilih Pesanan</label>
                <select class="form-control" id="order_id" name="order_id" required onchange="updateOrderDetails(this)">
                    <option value="" selected disabled>Pilih Pesanan</option>
                    @foreach ($orders as $order)
                        <option value="{{ $order->id }}" data-total="{{ $order->total_amount }}"
                            data-product="{{ $order->product->name }}" data-quantity="{{ $order->quantity }}">
                            Pesanan #{{ $order->id }} - Total: Rp{{ number_format($order->total_amount, 2) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Produk</label>
                <input type="text" class="form-control" id="product" name="product" readonly>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="quantity" name="quantity" readonly>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Jumlah Total</label>
                <input type="number" class="form-control" id="amount" name="amount" readonly>
            </div>
            <div class="mb-3">
                <label for="payment_method" class="form-label">Metode Pembayaran</label>
                <select class="form-control" id="payment_method" name="payment_method"
                    onchange="showPaymentOptions(this.value)" required>
                    <option value="" selected disabled>Pilih Metode Pembayaran</option>
                    <option value="cash">Cash</option>
                    <option value="bank_transfer">Transfer Bank</option>
                    <option value="qris">QRIS</option>
                </select>
            </div>
            <div id="bank_options" class="mb-3" style="display: none;">
                <label for="bank" class="form-label">Pilih Bank</label>
                <select class="form-control" id="bank" name="bank">
                    <option value="" selected disabled>Pilih Bank</option>
                    <option value="BCA">BCA</option>
                    <option value="BRI">BRI</option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="BNI">BNI</option>
                    <option value="BSI">BSI</option>
                    <option value="Permata">Permata</option>
                    <option value="Cimb Niaga">Cimb Niaga</option>
                </select>
            </div>
            <div id="qris_options" class="mb-3" style="display: none;">
                <label for="qris" class="form-label">Pilih QRIS</label>
                <select class="form-control" id="qris" name="qris">
                    <option value="" selected disabled>Pilih QRIS</option>
                    <option value="Dana">Dana</option>
                    <option value="Gopay">Gopay</option>
                    <option value="Ovo">Ovo</option>
                    <option value="Shopee Pay">Shopee Pay</option>
                    <option value="Indomaret">Indomaret</option>
                    <option value="Alfamart">Alfamart</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Bayar</button>
            </div>
            <input type="hidden" name="status" value="completed">
        </form>
    </div>

    <script>
        function updateOrderDetails(select) {
            const selectedOption = select.options[select.selectedIndex];
            const total = selectedOption.getAttribute('data-total');
            const product = selectedOption.getAttribute('data-product');
            const quantity = selectedOption.getAttribute('data-quantity');

            document.getElementById('amount').value = total;
            document.getElementById('product').value = product;
            document.getElementById('quantity').value = quantity;
        }

        function showPaymentOptions(method) {
            document.getElementById('bank_options').style.display = method === 'bank_transfer' ? 'block' : 'none';
            document.getElementById('qris_options').style.display = method === 'qris' ? 'block' : 'none';
        }
    </script>
@endsection
