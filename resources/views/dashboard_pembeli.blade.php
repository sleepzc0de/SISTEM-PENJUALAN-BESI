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
                                <h3 class="card-title">Pesanan Terbaru</h3>
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="card-body">
                                <p>2 pesanan baru dalam proses.</p>
                                <a href="#" class="btn btn-sm btn-light">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-info text-white">
                            <div class="card-header">
                                <h3 class="card-title">Riwayat Pesanan</h3>
                                <i class="fas fa-history"></i>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#" class="text-white">
                                            <span class="float-right badge badge-pill badge-primary">Terkirim</span>
                                            #INV-1234 - Jerjak Jendela 10kg
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-white">
                                            <span class="float-right badge badge-pill badge-warning">Menunggu
                                                Pembayaran</span>
                                            #INV-5678 - Pintu Besi 2m
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-sm btn-light">Lihat Semua</a>
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
                                            <img src="{{ asset('images/besi-baja.jpg') }}" class="d-block w-100"
                                                alt="Jerjak Jendela">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Jerjak Jendela</h5>
                                                <p>Harga: Rp1.500</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/pipa-besi.jpg') }}" class="d-block w-100"
                                                alt="Pintu Besi">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Pintu Besi</h5>
                                                <p>Harga: Rp2.000</p>
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
                                    <a href="#" class="btn btn-sm btn-light">Ubah Profil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
