@extends('layout_penjual.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <img src="{{ asset('assets/images/SUMBER-JAYA-UTAMA.png') }}" class="card-img-top" alt="Gambar Baja">
                    <div class="card-body">
                        <h5 class="card-title">PT. Sumber Jaya Raya Utama</h5>
                        <p class="card-text">Membangun masa depan dengan baja berkualitas tinggi.</p>
                        <a href="https://sjusteel.co.id/" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Tentang Kami</h4>
                    </div>
                    <div class="card-body">
                        <p>PT. Sumber Jaya Raya Utama (SJU Steel) adalah perusahaan yang bergerak di industri baja
                            konstruksi. Kami berkomitmen untuk menyediakan produk berkualitas tinggi yang sesuai dengan
                            standar keselamatan dan estetika terbaik.</p>
                        <p>Dengan pengalaman lebih dari 20 tahun, kami telah membangun reputasi sebagai pemasok baja yang
                            terpercaya dan handal. Kami melayani berbagai kebutuhan konstruksi, mulai dari proyek perumahan
                            hingga infrastruktur skala besar.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Keunggulan Kami</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Produk Berkualitas Tinggi:</strong> Kami menggunakan bahan baku terbaik dan
                                menerapkan kontrol kualitas yang ketat untuk memastikan produk kami memenuhi standar
                                tertinggi.</li>
                            <li><strong>Pengalaman dan Keahlian:</strong> Tim kami yang berpengalaman dan ahli siap membantu
                                Anda dalam segala kebutuhan konstruksi baja Anda.</li>
                            <li><strong>Harga Kompetitif:</strong> Kami menawarkan harga yang kompetitif tanpa mengorbankan
                                kualitas produk dan layanan kami.</li>
                            <li><strong>Komitmen Kepada Pelanggan:</strong> Kami selalu mengutamakan kepuasan pelanggan dan
                                memberikan layanan terbaik untuk setiap proyek.</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Layanan Kami</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Pembuatan Besi dan Baja:</strong> Melalui proses yang canggih dan terkontrol, kami
                                menghasilkan berbagai macam produk besi dan baja berkualitas tinggi, seperti besi beton,
                                balok baja, dan struktur baja.</li>
                            <li><strong>Proyek Konstruksi:</strong> Kami menawarkan jasa konstruksi baja yang lengkap, mulai
                                dari perencanaan dan desain, hingga pelaksanaan dan penyelesaian proyek.</li>
                            <li><strong>Konsultasi Konstruksi:</strong> Tim ahli kami siap membantu Anda dalam merencanakan
                                dan melaksanakan proyek konstruksi dengan efisiensi dan efektivitas maksimal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hubungi Kami</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>PT. Sumber Jaya Raya Utama</strong></p>
                        <p>Alamat: Rukan Exclusive Bukit Golf Mediterania Blok B no.35, Pantai Indah Kapuk, Jakarta Utara,
                            14470</p>
                        <p>Email: enquiries@sjusteel.co.id</p>
                        <p>Telepon: (021) 5596 5939, 5596 6191</p>
                        <p>Whatsapp : +6281294149198</p>
                        <p>Website: https://sjusteel.co.id</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
