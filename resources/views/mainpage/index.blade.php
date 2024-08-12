@extends('welcome')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/page.css') }}">
@endsection

@section('js')
    <link rel="stylesheet" href="{{ asset('assets/js/homepage/jquery.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/homepage/page.js') }}">
@endsection

@section('content')
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-4760">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-expanded-width-sm u-group u-similar-fill u-group-1">
                <div
                    class="u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
                    <h3 class="u-align-center u-text u-text-palette-4-base u-text-1">Seni Besi, Karya Tangan Ahli</h3>
                    <h1 class="u-align-center u-custom-font u-font-patua-one u-text u-title u-text-2">Paris Wrought Iron
                    </h1>
                    <p class="u-align-center u-custom-font u-font-arial u-text u-text-3">Paris Wrought Iron berkomitmen
                        untuk memberikan produk dan layanan terbaik kepada pelanggan. Setiap proyek yang dikerjakan selalu
                        mengedepankan kualitas, ketepatan waktu, dan kepuasan pelanggan.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-white u-section-3" id="sec-4e29">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-col">
                        <div class="u-size-30 u-size-60-md">
                            <div class="u-layout-row">
                                <div
                                    class="u-container-style u-layout-cell u-left-cell u-similar-fill u-size-20 u-size-20-md u-layout-cell-1">
                                    <div class="u-container-layout">
                                        <img class="u-expanded-width u-image u-image-1"
                                            src="{{ asset('assets/images/template/jenispelayanan1.jpg') }}">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-1">Desain dan Perencanaan
                                        </h3>
                                        <p class="u-text u-text-2">Paris Wrought Iron memastikan bahwa setiap project yang
                                            akan dilakukan telah melewati tahan desain dan perencanaan yang baik oleh para
                                            tim desain yang telah ahli dibidangnya. Dengan demikian tim ahli desain dapat
                                            bekerjan sama dengan klien untuk memahami visi serta kebutuhan mereka, sehingga
                                            dapat menciptakan perencanaan yang detail dan juga terperinci.</p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-layout-cell u-similar-fill u-size-20 u-size-20-md u-layout-cell-2">
                                    <div class="u-container-layout">
                                        <img class="u-expanded-width u-image u-image-2"
                                            src="{{ asset('assets/images/template/jenispelayanan2.jpg') }}">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-3">Rehabilitasi dan
                                            Perawatan</h3>
                                        <p class="u-text u-text-4">Paris Wrought Iron memastikan bahwa segala bentuk
                                            pelayanan rehabilitas dan juga perawatan yang dilakukan sesuai dengan standar
                                            yang telah ditetapkan perusahaan. Hal ini bertujuan untuk menjaga keamanan dan
                                            juga kualitas dari struktur baja agar tetap terjaga.</p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-layout-cell u-right-cell u-similar-fill u-size-20 u-size-20-md u-layout-cell-3">
                                    <div class="u-container-layout">
                                        <img class="u-expanded-width u-image u-image-3"
                                            src="{{ asset('assets/images/template/jenispelayanan3.jpg') }}">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-5">Instalasi</h3>
                                        <p class="u-text u-text-6">Para tim dari Paris Wrought Iron merupakan para ahli yang
                                            telah berpengalaman dalam melakukan instalasi struktur-struktur baja baik dalam
                                            skala kecil maupun besar. Tim instalasi memastikan bahwa semua elemen yang
                                            dipasang sesuai dengan ketentuan desain dan spesifikasi yang telah ditetapkan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-30 u-size-60-md">
                            <div class="u-layout-row">
                                <div
                                    class="u-container-style u-layout-cell u-left-cell u-similar-fill u-size-20 u-size-20-md u-layout-cell-4">
                                    <div class="u-container-layout">
                                        <img class="u-expanded-width u-image u-image-4"
                                            src="{{ asset('assets/images/template/jenispelayanan4.jpg') }}">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-7">Konsultasi Teknis</h3>
                                        <p class="u-text u-text-8">Layanan konsultasi teknis menyediakan bimbingan dan saran
                                            ahli kepada klien mengenai aspek teknis dari proyek mereka. Ini bisa mencakup
                                            pemilihan material, teknik pengelasan, metode pemasangan, dan pemecahan masalah
                                            yang mungkin muncul selama proses konstruksi. Konsultan teknis bekerja untuk
                                            memastikan proyek berjalan lancar dan sesuai dengan harapan klien.</p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-layout-cell u-similar-fill u-size-20 u-size-20-md u-layout-cell-5">
                                    <div class="u-container-layout">
                                        <img class="u-expanded-width u-image u-image-5"
                                            src="{{ asset('assets/images/template/jenispelayanan5.jpg') }}">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-9">Layanan Prototyping dan
                                            Mock-Up
                                        </h3>
                                        <p class="u-text u-text-10">Layanan ini menyediakan pembuatan prototipe dan mock-up
                                            untuk membantu klien memvisualisasikan hasil akhir proyek sebelum produksi
                                            massal atau instalasi penuh. Prototipe ini memungkinkan klien untuk mengevaluasi
                                            desain, melakukan penyesuaian jika diperlukan, dan memastikan bahwa semua elemen
                                            memenuhi standar dan kebutuhan mereka sebelum melanjutkan ke tahap berikutnya.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-layout-cell u-right-cell u-similar-fill u-size-20 u-size-20-md u-layout-cell-6">
                                    <div class="u-container-layout">
                                        <img class="u-expanded-width u-image u-image-6"
                                            src="{{ asset('assets/images/template/jenispelayanan6.jpg') }}">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-11">Kerjasama dengan Arsitek
                                            dan Desainer</h3>
                                        <p class="u-text u-text-12">Dalam layanan ini, perusahaan bekerja sama erat dengan
                                            arsitek dan desainer untuk mengintegrasikan elemen besi dan baja dalam proyek
                                            konstruksi. Kolaborasi ini memastikan bahwa desain yang dihasilkan tidak hanya
                                            estetis tetapi juga fungsional dan sesuai dengan spesifikasi teknis. Kerjasama
                                            ini juga membantu memastikan bahwa visi desain dapat diwujudkan dengan tepat
                                            dalam proses konstruksi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-4" id="sec-05d8">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div
                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-similar-fill u-group-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <h3 class="u-align-center u-text u-text-1">Paris Wrought Iron</h3>
                    <h2 class="u-align-center u-custom-font u-font-patua-one u-text u-text-2">Profil Kami</h2>
                    <p class="u-align-center u-text u-text-3">Paris Wrought Iron adalah perusahaan spesialis jasa konstruksi
                        besi dan baja yang berkomitmen menghadirkan solusi bangunan yang kokoh, tahan lama, dan estetis.
                        Dengan pengalaman bertahun-tahun, kami telah membangun reputasi sebagai mitra terpercaya dalam
                        berbagai proyek konstruksi, mulai dari bangunan komersial hingga hunian pribadi.
                    </p>
                </div>
            </div>
            <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-size-29 u-size-30-md">
                            <div class="u-layout-col">
                                <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                                    <div class="u-container-layout u-valign-top">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-4">Tentang Kami</h3>
                                        <p class="u-text u-text-5">Kami terus berusaha untuk menghadirkan kualitas yang
                                            terbaik
                                            bagi para konsumen, baik dalam segi kualitas produk yang ditawarkan hingga
                                            kualitas pelayanan dan inovasi yang kami hadirkan. Dengan pengalaman serta
                                            komitmen yang kami miliki,kami menjamin kepuasan dari para
                                            konsumen saat menggunakan produk dan jasa layanan kami, sehingga dapat
                                            terjalinlah sebuah ikatan yang kuat antara perusahaan dengan masyarakat.</p>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-2">
                                    <div class="u-container-layout u-valign-top">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-6">Visi & Misi</h3>
                                        <p class="u-text u-text-7">1. Mengembangkan kualitas sumber daya yag dimiliki serta
                                            diimbangi dengan sistem
                                            manajemen yang mendukung dalam proses perkembangan perusahaan.</p>
                                        <p class="u-text u-text-7">2. Menjadi salah satu perusahaan penyedia jasa konstruksi
                                            besi dan baja yang
                                            dikenal luas di Indonesia karena kualitas serta pelayanan yang dihadirkan kepada
                                            para masyarakat luas.</p>
                                        <p class="u-text u-text-7">3. Memperluas cakupan pemasaran dengan membangun kepuasan
                                            dan kepercayaan para
                                            konsumen melalui kinerja serta kualitas produk yang sesuai dengan harapan dan
                                            ekspektasi konsumen.</p>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-3">
                                    <div class="u-container-layout u-valign-top">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-8">Tujuan</h3>
                                        <p class="u-text u-text-9"> Menjadi perusahaan penyedia jasa design serta
                                            konstruksi besi dan baja berskala nasional yang layak dan memiliki kemampuan
                                            untuk ikut serta berkontribusi dalam perkembangan infrastruktur negara
                                            Indonesia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-17 u-size-30-md">
                            <div class="u-layout-row">
                                <div class="u-container-style u-image u-layout-cell u-size-60 u-image-1">
                                    <div class="u-container-layout"></div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-14 u-size-60-md">
                            <div class="u-layout-col">
                                <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-5">
                                    <div class="u-container-layout u-valign-top">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-10">Keandalan & Kepercayaan
                                        </h3>
                                        <p class="u-text u-text-11">Paris Wrought Iron berkomitmen penuh untuk menghadirkan
                                            produk-produk besi tempa berkualitas tinggi yang selalu memenuhi spesifikasi
                                            yang dijanjikan. Kepercayaan dan Kenyamanan anda adalah prioritas utama kami.
                                        </p>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-6">
                                    <div class="u-container-layout u-valign-top">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-12">Keahlian</h3>
                                        <p class="u-text u-text-13">Paris Wrought Iron didukung oleh tim yang terdiri dari
                                            para ahli yang berpengalaman bidangnya masing-masing, memastikan setiap proyek
                                            besi tempa yang kami kerjakan tidak hanya indah secara estetika, tetapi juga
                                            teruji kekuatan dan keamanannya.</p>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-7">
                                    <div class="u-container-layout u-valign-top">
                                        <h3 class="u-custom-font u-font-patua-one u-text u-text-14">Kualitas</h3>
                                        <p class="u-text u-text-15">Kami hanya menggunakan bahan baku berkualitas tinggi
                                            yang telah teruji dan terbukti keunggulannya. Proses pengerjaan dilakukan oleh
                                            para teknisi ahli kami yang berpengalaman dan tersertifikasi, mengikuti standar
                                            industri yang ketat untuk memastikan hasil akhir yang optimal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-carousel u-slide u-block-8870-1" id="carousel-381b" data-interval="5000" data-u-ride="carousel">
        <ol class="u-absolute-hcenter u-carousel-indicators u-block-8870-2">
            <li data-u-target="#carousel-381b" data-u-slide-to="0" class="u-active u-grey-30"></li>
            <li data-u-target="#carousel-381b" class="u-grey-30" data-u-slide-to="1"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-carousel-item u-clearfix u-image u-shading u-section-5-1">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <div class="u-align-center u-container-style u-group u-similar-fill u-group-1">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <h3 class="u-text u-text-1">Karya hebat dan mengagumkan</h3>
                            <h2 class="u-custom-font u-font-patua-one u-text u-text-2">Proyek Kami</h2>
                        </div>
                    </div>
                    <div class="u-text u-text-3"></div>
                    <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <div class="u-layout-row">
                                <div
                                    class="u-container-style u-image u-layout-cell u-left-cell u-size-15 u-size-30-md u-image-1">
                                    <div class="u-container-layout"></div>
                                </div>
                                <div class="u-container-style u-image u-layout-cell u-size-15 u-size-30-md u-image-2">
                                    <div class="u-container-layout"></div>
                                </div>
                                <div class="u-container-style u-image u-layout-cell u-size-15 u-size-30-md u-image-3">
                                    <div class="u-container-layout"></div>
                                </div>
                                <div
                                    class="u-container-style u-image u-layout-cell u-right-cell u-size-15 u-size-30-md u-image-4">
                                    <div class="u-container-layout"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-carousel-item u-clearfix u-image u-shading u-section-5-2">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <div class="u-text u-text-1"></div>
                    <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <div class="u-layout-row">
                                <div
                                    class="u-container-style u-image u-layout-cell u-left-cell u-size-15 u-size-30-md u-image-1">
                                    <div class="u-container-layout"></div>
                                </div>
                                <div class="u-container-style u-image u-layout-cell u-size-15 u-size-30-md u-image-2">
                                    <div class="u-container-layout"></div>
                                </div>
                                <div class="u-container-style u-image u-layout-cell u-size-15 u-size-30-md u-image-3">
                                    <div class="u-container-layout"></div>
                                </div>
                                <div
                                    class="u-container-style u-image u-layout-cell u-right-cell u-size-15 u-size-30-md u-image-4">
                                    <div class="u-container-layout"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-text-grey-30 u-block-8870-3"
            href="#carousel-381b" role="button" data-u-slide="prev">
            <span aria-hidden="true">
                <svg viewBox="0 0 256 256">
                    <g>
                        <polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128">
                        </polygon>
                    </g>
                </svg>
            </span>
            <span class="sr-only">
                <svg viewBox="0 0 256 256">
                    <g>
                        <polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128">
                        </polygon>
                    </g>
                </svg>
            </span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-text-grey-30 u-block-8870-4"
            href="#carousel-381b" role="button" data-u-slide="next">
            <span aria-hidden="true">
                <svg viewBox="0 0 306 306">
                    <g id="chevron-right">
                        <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
                    </g>
                </svg>
            </span>
            <span class="sr-only">
                <svg viewBox="0 0 306 306">
                    <g id="chevron-right">
                        <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
                    </g>
                </svg>
            </span>
        </a>
    </section>
    <section class="u-clearfix u-grey-5 u-section-9" id="sec-d2c5">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-center u-container-style u-group u-similar-fill u-group-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <h2 class="u-custom-font u-font-patua-one u-text u-text-2">Review Pelanggan</h2>
                </div>
            </div>
            <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-white u-layout-cell-1">
                            <div class="u-container-layout">
                                <img src="{{ asset('assets/images/template/kris.jpg') }}" alt=""
                                    class="u-align-left u-image u-image-default u-image-1"><span
                                    class="u-icon u-icon-circle u-text-palette-4-base u-icon-1"><svg class="u-svg-link"
                                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 123.961 123.961"
                                        style="undefined">
                                        <use xlink:href="#svg-f40f"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 123.961 123.961" x="0px" y="0px"
                                        id="svg-f40f" style="enable-background:new 0 0 123.961 123.961;">
                                        <g>
                                            <path
                                                d="M49.8,29.032c3.1-1.3,4.4-5,3-8l-4.9-10.3c-1.4-2.899-4.8-4.2-7.8-2.899c-8.5,3.6-15.8,8.3-21.6,14   C11.4,28.532,6.6,36.232,4,44.732c-2.6,8.601-4,20.3-4,35.2v30.7c0,3.3,2.7,6,6,6h39.3c3.3,0,6-2.7,6-6v-39.3c0-3.301-2.7-6-6-6   H26.5c0.2-10.101,2.6-18.2,7-24.301C37.1,36.133,42.5,32.133,49.8,29.032z">
                                            </path>
                                            <path
                                                d="M120.4,29.032c3.1-1.3,4.399-5,3-8l-4.9-10.199c-1.4-2.9-4.8-4.2-7.8-2.9c-8.4,3.6-15.601,8.3-21.5,13.9   c-7.101,6.8-12,14.5-14.601,23c-2.6,8.399-3.899,20.1-3.899,35.1v30.7c0,3.3,2.7,6,6,6H116c3.3,0,6-2.7,6-6v-39.3   c0-3.301-2.7-6-6-6H97.1c0.2-10.101,2.601-18.2,7-24.301C107.7,36.133,113.1,32.133,120.4,29.032z">
                                            </path>
                                        </g>
                                    </svg></span>
                                <p class="u-text u-text-3">"Sudah beberapa waktu saya menggunakan furniture ini, dan saya
                                    benar-benar puas. Kualitas besi yang digunakan sangat baik, membuatnya terasa kokoh dan
                                    tahan lama. Finishing-nya pun rapi dan menarik. Harga yang saya bayarkan sebanding
                                    dengan kualitas produk ini."</p>
                                <h5 class="u-custom-font u-font-patua-one u-text u-text-4">Christ Jerepito</h5>
                                <h6 class="u-text u-text-5">Pelanggan</h6>
                            </div>
                        </div>
                        <div
                            class="u-align-left u-container-style u-layout-cell u-size-20 u-size-20-md u-white u-layout-cell-2">
                            <div class="u-container-layout">
                                <img src="{{ asset('assets/images/template/1m3l.jpg') }}" alt=""
                                    class="u-align-left u-image u-image-default u-image-2"><span
                                    class="u-icon u-icon-circle u-text-palette-4-base u-icon-2"><svg class="u-svg-link"
                                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 123.961 123.961"
                                        style="undefined">
                                        <use xlink:href="#svg-5fac"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 123.961 123.961" x="0px" y="0px"
                                        id="svg-5fac" style="enable-background:new 0 0 123.961 123.961;">
                                        <g>
                                            <path
                                                d="M49.8,29.032c3.1-1.3,4.4-5,3-8l-4.9-10.3c-1.4-2.899-4.8-4.2-7.8-2.899c-8.5,3.6-15.8,8.3-21.6,14   C11.4,28.532,6.6,36.232,4,44.732c-2.6,8.601-4,20.3-4,35.2v30.7c0,3.3,2.7,6,6,6h39.3c3.3,0,6-2.7,6-6v-39.3c0-3.301-2.7-6-6-6   H26.5c0.2-10.101,2.6-18.2,7-24.301C37.1,36.133,42.5,32.133,49.8,29.032z">
                                            </path>
                                            <path
                                                d="M120.4,29.032c3.1-1.3,4.399-5,3-8l-4.9-10.199c-1.4-2.9-4.8-4.2-7.8-2.9c-8.4,3.6-15.601,8.3-21.5,13.9   c-7.101,6.8-12,14.5-14.601,23c-2.6,8.399-3.899,20.1-3.899,35.1v30.7c0,3.3,2.7,6,6,6H116c3.3,0,6-2.7,6-6v-39.3   c0-3.301-2.7-6-6-6H97.1c0.2-10.101,2.601-18.2,7-24.301C107.7,36.133,113.1,32.133,120.4,29.032z">
                                            </path>
                                        </g>
                                    </svg></span>
                                <p class="u-text u-text-6">"Saya sangat puas dengan pembelian furniture ini. Desainnya
                                    minimalis dan sangat cocok dengan interior rumah saya, membuatnya terasa kokoh dan tahan
                                    lama. Proses pembeliannya juga sangat mudah dan cepat.
                                    Pelayanan dari penjual sangat membantu. Saya sangat merekomendasikan furniture ini
                                    kepada teman-teman saya."
                                </p>
                                <h5 class="u-custom-font u-font-patua-one u-text u-text-7">Imelda Kirene</h5>
                                <h6 class="u-text u-text-8">Pelanggan</h6>
                            </div>
                        </div>
                        <div
                            class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-white u-layout-cell-3">
                            <div class="u-container-layout">
                                <img src="{{ asset('assets/images/template/3s13r.jpg') }}" alt=""
                                    class="u-align-left u-image u-image-default u-image-3"><span
                                    class="u-icon u-icon-circle u-text-palette-4-base u-icon-3"><svg class="u-svg-link"
                                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 123.961 123.961"
                                        style="undefined">
                                        <use xlink:href="#svg-f6cb"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 123.961 123.961" x="0px" y="0px"
                                        id="svg-f6cb" style="enable-background:new 0 0 123.961 123.961;">
                                        <g>
                                            <path
                                                d="M49.8,29.032c3.1-1.3,4.4-5,3-8l-4.9-10.3c-1.4-2.899-4.8-4.2-7.8-2.899c-8.5,3.6-15.8,8.3-21.6,14   C11.4,28.532,6.6,36.232,4,44.732c-2.6,8.601-4,20.3-4,35.2v30.7c0,3.3,2.7,6,6,6h39.3c3.3,0,6-2.7,6-6v-39.3c0-3.301-2.7-6-6-6   H26.5c0.2-10.101,2.6-18.2,7-24.301C37.1,36.133,42.5,32.133,49.8,29.032z">
                                            </path>
                                            <path
                                                d="M120.4,29.032c3.1-1.3,4.399-5,3-8l-4.9-10.199c-1.4-2.9-4.8-4.2-7.8-2.9c-8.4,3.6-15.601,8.3-21.5,13.9   c-7.101,6.8-12,14.5-14.601,23c-2.6,8.399-3.899,20.1-3.899,35.1v30.7c0,3.3,2.7,6,6,6H116c3.3,0,6-2.7,6-6v-39.3   c0-3.301-2.7-6-6-6H97.1c0.2-10.101,2.601-18.2,7-24.301C107.7,36.133,113.1,32.133,120.4,29.032z">
                                            </path>
                                        </g>
                                    </svg></span>
                                <p class="u-text u-text-9">"Furniture ini sangat fungsional dan memenuhi semua kebutuhan
                                    saya. Rak-raknya cukup luas untuk menyimpan banyak barang, sedangkan meja kerjanya
                                    sangat nyaman untuk bekerja. Kualitas juga sangat baik, membuat furniture ini
                                    terasa kokoh dan stabil."</p>
                                <h5 class="u-custom-font u-font-patua-one u-text u-text-10">Esther Gratia</h5>
                                <h6 class="u-text u-text-11">Pelanggan</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-black u-clearfix u-section-12" id="sec-acc6">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-8 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                            <div class="u-container-layout"><span class="u-icon u-icon-circle u-icon-1"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60"
                                        style="undefined">
                                        <use xlink:href="#svg-0d2d"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-0d2d"
                                        style="enable-background:new 0 0 60 60;">
                                        <path
                                            d="M59.423,11.591l-15-7c-0.015-0.007-0.032-0.009-0.047-0.015c-0.042-0.017-0.085-0.03-0.128-0.041  c-0.036-0.009-0.071-0.018-0.107-0.023c-0.045-0.007-0.09-0.008-0.136-0.008c-0.037,0-0.074,0-0.111,0.004  c-0.043,0.004-0.084,0.014-0.126,0.024c-0.04,0.01-0.08,0.02-0.119,0.034c-0.014,0.005-0.029,0.006-0.043,0.012L30,10.409  L16.394,4.578c-0.009-0.004-0.018-0.004-0.027-0.008c-0.04-0.016-0.081-0.025-0.122-0.035c-0.038-0.01-0.076-0.021-0.115-0.027  c-0.042-0.005-0.083-0.004-0.125-0.004c-0.039,0-0.077-0.003-0.115,0.002c-0.043,0.005-0.085,0.017-0.127,0.027  c-0.037,0.009-0.074,0.016-0.11,0.029c-0.008,0.003-0.017,0.003-0.025,0.007l-15,6C0.249,10.721,0,11.088,0,11.497v43  c0,0.332,0.165,0.642,0.439,0.828C0.607,55.438,0.803,55.497,1,55.497c0.125,0,0.251-0.023,0.372-0.071l14.616-5.846l13.619,5.836  c0.014,0.006,0.029,0.003,0.043,0.009c0.114,0.043,0.231,0.072,0.351,0.072s0.238-0.029,0.351-0.072  c0.014-0.005,0.029-0.003,0.043-0.009l13.619-5.836l14.616,5.846c0.12,0.048,0.246,0.071,0.372,0.071  c0.197,0,0.393-0.059,0.561-0.172C59.835,55.139,60,54.829,60,54.497v-42C60,12.108,59.775,11.755,59.423,11.591z M2,12.174l13-5.2  V47.82l-13,5.2V12.174z M17,7.014l12,5.143V52.98l-12-5.143V7.014z M31,12.156l12-5.143v40.824L31,52.98V12.156z M58,53.02l-13-5.2  V7.067l13,6.066V53.02z">
                                        </path>
                                    </svg></span>
                                <h3 class="u-text u-text-palette-4-base u-text-1">Kunjungi Kami</h3>
                                <p class="u-text u-text-2">Medan , Sumatera Utara, Indonesia</p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                            <div class="u-container-layout"><span class="u-icon u-icon-circle u-icon-2"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                        viewBox="0 0 370.88 370.88" style="undefined">
                                        <use xlink:href="#svg-8c2a"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 370.88 370.88" x="0px" y="0px"
                                        id="svg-8c2a" style="enable-background:new 0 0 370.88 370.88;">
                                        <g>
                                            <g>
                                                <path
                                                    d="M355.6,66.16H15.28C6.841,66.16,0,73.001,0,81.44v208c0,8.439,6.841,15.28,15.28,15.28H355.6    c8.439,0,15.28-6.841,15.28-15.28v-208C370.88,73.001,364.039,66.16,355.6,66.16z M15.28,78.16H355.6    c1.436,0.007,2.7,0.947,3.12,2.32L185.44,188.72L12.16,80.48C12.58,79.107,13.844,78.167,15.28,78.16z M12,94.16L136.64,172    L12,270.88V94.16z M358.88,289.36c0,1.812-1.469,3.28-3.28,3.28H15.28c-1.811,0-3.28-1.469-3.28-3.28v-3.2l135.44-107.04    l34.8,21.76c1.955,1.233,4.445,1.233,6.4,0l34.8-21.76l135.44,107.04V289.36z M358.88,270.88l-124.96-98.56l124.96-77.44V270.88z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg></span>
                                <h3 class="u-text u-text-palette-4-base u-text-3">Kontak Email</h3>
                                <p class="u-text u-text-4">paris.wrought@gmail.com</p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                            <div class="u-container-layout"><span class="u-icon u-icon-circle u-icon-3"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60"
                                        style="undefined">
                                        <use xlink:href="#svg-ff34"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-ff34"
                                        style="enable-background:new 0 0 60 60;">
                                        <g>
                                            <path
                                                d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595   V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405   C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z">
                                            </path>
                                            <path
                                                d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2   s2,0.897,2,2S31.103,55,30,55z">
                                            </path>
                                            <path
                                                d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z">
                                            </path>
                                            <path
                                                d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z">
                                            </path>
                                            <path
                                                d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552   c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293   C61.128,16.434,61.128,9.085,56.612,4.569z">
                                            </path>
                                            <path
                                                d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639   s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293   c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z">
                                            </path>
                                            <path
                                                d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38   c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414   C1.065,15.799,1.065,9.72,4.802,5.983z">
                                            </path>
                                            <path
                                                d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053   c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414   c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z">
                                            </path>
                                        </g>
                                    </svg></span>
                                <h3 class="u-text u-text-palette-4-base u-text-5">Hubungi Kami</h3>
                                <p class="u-text u-text-6">+628533894586</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
