@extends('layout_admin.master')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Riwayat Customer</h4>
                                    <h5 class="card-subtitle">Ikhtisar Barang Dibeli</h5>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table v-middle">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Pembeli</th>
                                        <th class="border-top-0">Penjual</th>
                                        <th class="border-top-0">Produk</th>
                                        <th class="border-top-0">Jumlah</th>
                                        <th class="border-top-0">Harga</th>
                                        <th class="border-top-0">Total</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Tanggal Pesanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($riwayats as $riwayat)
                                        <tr>
                                            <td>{{ $riwayat->id }}</td>
                                            <td>{{ $riwayat->buyer->username }}</td>
                                            <td>{{ $riwayat->seller->username }}</td>
                                            <td>{{ $riwayat->product->name }}</td>
                                            <td>{{ $riwayat->quantity }}</td>
                                            <td>{{ $riwayat->price }}</td>
                                            <td>{{ $riwayat->total_amount }}</td>
                                            <td>{{ $riwayat->status }}</td>
                                            <td>{{ $riwayat->order_date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <style>
        .profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>

    <script>
        function updateWeather() {
            const weatherData = {
                temperature: 28,
                description: "Clear and sunny",
                icon: "wi-day-sunny",
                day: "Wednesday",
                date: "August 2024"
            };

            // Memperbarui elemen HTML dengan data cuaca simulasi
            document.getElementById('temperature').innerHTML = `${weatherData.temperature}<sup>o</sup>`;
            document.getElementById('weather-description').textContent = weatherData.description;
            document.getElementById('weather-icon').className = `wi ${weatherData.icon}`;
            document.getElementById('day').textContent = weatherData.day;
            document.getElementById('date').textContent = weatherData.date;
        }

        // Jalankan fungsi updateWeather saat konten halaman selesai dimuat
        document.addEventListener('DOMContentLoaded', updateWeather);
    </script>
@endsection
