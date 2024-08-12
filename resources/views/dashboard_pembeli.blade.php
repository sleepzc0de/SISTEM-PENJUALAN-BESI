@extends('layout_pembeli.master')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endsection

@section('js')
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Hi , Selamat Datang Mr. {{ Auth::user()->username }}</h1>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-success text-white">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Pesanan </h3>
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="card-body">
                                <p>Daftar pesanan baru dalam proses</p>
                                <a href="{{ route('order.index') }}" class="btn btn-sm btn-light">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-info text-white">
                            <div class="card-header">
                                <h3 class="card-title">Riwayat Pembayaran</h3>
                                <i class="fas fa-history"></i>
                            </div>
                            <div class="card-body">
                                <p>Daftar Riwayat Transaksi Pembayaran</p>
                                <a href="{{ route('payment.index') }}" class="btn btn-sm btn-light">Lihat Semua</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-warning">
                            <div class="card-header">
                                <h3 class="card-title">Katalog Produk</h3>
                                <i class="fas fa-cubes"></i>
                            </div>
                            <div class="card-body">
                                <div class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('storage/product_photos/JkLMSG0tq5LpplWChzoHHROFVNrGEPA301kahDmI.jpg') }}"
                                                class="d-block w-100" alt="Pintu Besi"
                                                style="width: 80%; height: 300px; object-fit: cover;">
                                            <div class="carousel-caption d-none d-md-block"></div>
                                            <div class="text-center mt-2">
                                                <h5>Pintu besi</h5>
                                                <p>Harga: Rp2.000.000</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('storage/product_photos/tTbSsGxbUslW8ELy5reZ4BU3ycAHKjpx8LVeo2Ei.jpg') }}"
                                                class="d-block w-100" alt="Jerjak Jendela"
                                                style="width: 80%; height: 250px; object-fit: cover;">
                                            <div class="carousel-caption d-none d-md-block"></div>
                                            <div class="text-center mt-2">
                                                <h5>Jerjak Jendela</h5>
                                                <p>Harga: Rp1.000.000</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('storage/product_photos/LADzUzckyuVtmfdq0uR5fBq11CV4gsWl3VBfWNqR.jpg') }}"
                                                class="d-block w-100" alt="Tangga Melingkar"
                                                style="width: 80%; height: 450px; object-fit: cover;">
                                            <div class="carousel-caption d-none d-md-block"></div>
                                            <div class="text-center mt-2">
                                                <h5>Tangga Model Melingkar</h5>
                                                <p>Harga: Rp3.000.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-primary text-white">
                            <div class="card-header">
                                <div class="card-body">
                                    <p>Nama: {{ Auth::user()->username }}</p>
                                    <p>Email: {{ Auth::user()->email }}</p>
                                    <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-light">Ubah Profil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
