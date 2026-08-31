<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pendidikan Anggota Kelompok</title>
    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

    <!-- Custom CSS untuk Tema Kuning -->
    <style>
        body {
            /* Latar belakang halaman utuh (terlihat jika di-scroll lebih dari 100vh) */
            background-color: #fffde7;
            background-image: radial-gradient(#ffe082 1px, transparent 1px);
            background-size: 20px 20px;
        }

        /* Overlay Gradasi Kuning yang Membungkus Seluruh Konten */
        .parallax-window {
            position: relative;
            min-height: 100vh; /* Memastikan area kuning selalu selebar/setinggi layar */
            padding-bottom: 3rem; /* Memberi ruang di bagian bawah */
        }
        .parallax-window::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.9) 0%, rgba(253, 126, 20, 0.9) 100%);
            z-index: 1;
        }
        .parallax-window .container {
            position: relative;
            z-index: 2; /* Memastikan teks & kartu berada di atas gradasi */
        }

        /* Teks Header */
        .title-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Bayangan agar teks putih terbaca jelas */
        }

        /* Desain Kartu (Card) */
        .card-custom {
            border-radius: 15px;
            border-top: 5px solid #ffc107 !important; /* Garis kuning di atas kartu */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #ffffff;
        }
        .card-custom:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15) !important; /* Bayangan halus saat di-hover */
        }

        /* Warna Teks Judul Kartu */
        .text-theme-dark {
            color: #d39e00 !important; /* Kuning gelap / emas */
            font-weight: 700;
        }

        /* Ikon Pendidikan */
        .icon-smk { color: #ff9800; } /* Orange */
        .icon-smp { color: #fbc02d; } /* Kuning cerah */
        .icon-sd { color: #cddc39; }  /* Kuning kehijauan */

        /* Tombol Kustom (Putih agar kontras dengan background kuning) */
        .btn-custom-light {
            background-color: #ffffff;
            color: #d39e00;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn-custom-light:hover {
            background-color: #f8f9fa;
            color: #fd7e14;
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Pembungkus Utama (Area Kuning) -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/mini-profile-bg-01.jpg') }}">

        <!-- Header Section -->
        <div class="container text-center pt-5 pb-4 text-white title-shadow">
            <h1 class="display-4 font-weight-bold"><i class="fas fa-graduation-cap mr-2"></i>Riwayat Pendidikan</h1>
            <p class="lead">Perjalanan Akademik Seluruh Anggota Kelompok</p>
        </div>

        <!-- Content Section (Kartu Pendidikan, sekarang di dalam area kuning) -->
        <div class="container">
            <div class="row">

                <!-- 1. Mey Lujeng Trisnawati -->
                <div class="col-md-6 mb-4">
                    <div class="card card-custom shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <h4 class="card-title text-theme-dark"><i class="fas fa-user-graduate mr-2 text-warning"></i>Mey Lujeng Trisnawati</h4>
                            <hr>
                            <ul class="list-unstyled mb-0 text-dark">
                                <li class="mb-3">
                                    <i class="fas fa-school icon-smk fa-lg mr-2"></i>
                                    <strong>SMK:</strong> SMK Bhakti Indonesia Medika
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-book-reader icon-smp fa-lg mr-2"></i>
                                    <strong>SMP:</strong> SMPN 5 Kota Mojokerto
                                </li>
                                <li>
                                    <i class="fas fa-child icon-sd fa-lg mr-2"></i>
                                    <strong>SD:</strong> SDN Gunung Gedangan 1
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2. Muhammad Syahrul Mubarok -->
                <div class="col-md-6 mb-4">
                    <div class="card card-custom shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <h4 class="card-title text-theme-dark"><i class="fas fa-user-graduate mr-2 text-warning"></i>Muhammad Syahrul Mubarok</h4>
                            <hr>
                            <ul class="list-unstyled mb-0 text-dark">
                                <li class="mb-3">
                                    <i class="fas fa-school icon-smk fa-lg mr-2"></i>
                                    <strong>SMK:</strong> SMKN 1 Beji
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-book-reader icon-smp fa-lg mr-2"></i>
                                    <strong>MTs:</strong> MTsN 2 Pasuruan
                                </li>
                                <li>
                                    <i class="fas fa-child icon-sd fa-lg mr-2"></i>
                                    <strong>MI:</strong> MIN 1 Pasuruan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 3. Sofia Meidiana -->
                <div class="col-md-6 mb-4">
                    <div class="card card-custom shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <h4 class="card-title text-theme-dark"><i class="fas fa-user-graduate mr-2 text-warning"></i>Sofia Meidiana</h4>
                            <hr>
                            <ul class="list-unstyled mb-0 text-dark">
                                <li class="mb-3">
                                    <i class="fas fa-school icon-smk fa-lg mr-2"></i>
                                    <strong>SMK:</strong> SMKN Kasiman
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-book-reader icon-smp fa-lg mr-2"></i>
                                    <strong>SMP:</strong> SMPN Kasiman
                                </li>
                                <li>
                                    <i class="fas fa-child icon-sd fa-lg mr-2"></i>
                                    <strong>SD:</strong> SDN Ngaglik 1
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 4. Muhamad Nauval Zdakwan Utomo -->
                <div class="col-md-6 mb-4">
                    <div class="card card-custom shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <h4 class="card-title text-theme-dark"><i class="fas fa-user-graduate mr-2 text-warning"></i>Muhamad Nauval Zdakwan Utomo</h4>
                            <hr>
                            <ul class="list-unstyled mb-0 text-dark">
                                <li class="mb-3">
                                    <i class="fas fa-school icon-smk fa-lg mr-2"></i>
                                    <strong>SMK:</strong> SMKN 1 Beji
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-book-reader icon-smp fa-lg mr-2"></i>
                                    <strong>SMP:</strong> SMPN 2 Beji
                                </li>
                                <li>
                                    <i class="fas fa-child icon-sd fa-lg mr-2"></i>
                                    <strong>SD:</strong> SDN Beji 1
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tombol Navigasi -->
            <div class="text-center mt-4">
                <a href="{{ url('/') }}" class="btn btn-custom-light">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Beranda
                </a>
            </div>
        </div>

    </div> <!-- End of parallax-window -->

    <!-- JS Dependencies -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
