@extends('welcome')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/cs1.css') }}">
@endsection

@section('content')
    <div class="circle"></div>
    <div class="container">
        <div class="text-box">
            <h2>The Art of Iron, Perfected <br>It's <span>Paris Wrought Iron</span></h2>
            <p>It conveys the idea that their products are not just functional pieces of metal but rather meticulously
                crafted creations that embody beauty, precision, and timeless elegance. The word "perfected" emphasizes
                their commitment to excellence and their mastery of besi craftsmanship.</p>
            <a href="{{ route('login') }}">Kunjungi Sekarang</a>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/images/paris.png') }}" class="paris" alt="">
        </div>
    </div>
    <ul class="social">
        <li><a href="https://www.facebook.com/"><img src="{{ asset('assets/images/facebook.png') }}"></a></li>
        <li><a href="https://www.instagram.com/"><img src="{{ asset('assets/images/instagram.png') }}"></a></li>
        <li><a href="https://x.com/"><img src="{{ asset('assets/images/twitter.png') }}"></a></li>
    </ul>
@endsection

@section('scripts')
    <script>
        function imgSlider(imgSrc) {
            document.querySelector('.starbucks').src = imgSrc;
        }

        function changeCircleColor(color) {
            document.querySelector('.circle').style.background = color;
        }
    </script>
@endsection

{{-- <div class="besi">
        <h2>Produk Unit</h2>

        @foreach ($products as $product)
            <div class="list-produk">
                @if ($product->photo)
                    <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
                @else
                    <img src="{{ asset('assets/images/default-product.png') }}" alt="Default Image">
                @endif

                <h4>{{ $product->name }}</h4>
                <h5>Rp {{ number_format($product->price, 0, ',', '.') }},-</h5>

                <a class="tombol tombol-beli" href="{{ route('login') }}">Beli</a>
            </div>
        @endforeach
    </div> --}}
