<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prestasi Anggota Kelompok</title>

    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

    <!-- Custom CSS untuk Tema Kuning -->
    <style>
        body {
            background-color: #fffde7;
            background-image: radial-gradient(#ffe082 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .parallax-window {
            position: relative;
            min-height: 100vh;
            padding-bottom: 3rem;
        }

        .parallax-window::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;

            background: linear-gradient(
                135deg,
                rgba(255, 193, 7, 0.9) 0%,
                rgba(253, 126, 20, 0.9) 100%
            );

            z-index: 1;
        }

        .parallax-window .container {
            position: relative;
            z-index: 2;
        }

        /* Teks Header */
        .title-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Desain Card */
        .card-custom {
            border-radius: 15px;
            border-top: 5px solid #ffc107 !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #ffffff;
        }

        .card-custom:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15) !important;
        }

        /* Judul Nama */
        .text-theme-dark {
            color: #d39e00 !important;
            font-weight: 700;
        }

        /* Ikon Prestasi */
        .icon-prestasi {
            color: #ff9800;
        }

        /* Tombol */
        .btn-custom-light {
            background-color: #ffffff;
            color: #d39e00;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-custom-light:hover {
            background-color: #f8f9fa;
            color: #fd7e14;
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            text-decoration: none;
        }

        /* Daftar Prestasi */
        .prestasi-list li {
            margin-bottom: 12px;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <!-- Pembungkus Utama -->
    <div class="parallax-window"
        data-parallax="scroll"
        data-image-src="{{ asset('img/mini-profile-bg-01.jpg') }}">

        <!-- Header Section -->
        <div class="container text-center pt-5 pb-4 text-white title-shadow">

            <h1 class="display-4 font-weight-bold">
                <i class="fas fa-trophy mr-2"></i>
                Prestasi Anggota
            </h1>

            <p class="lead">
                Prestasi dan Pencapaian Seluruh Anggota Kelompok
            </p>

        </div>


        <!-- Content Section -->
        <div class="container">

            <div class="row">

                <!-- 1. Muhammad Syahrul Mubarok -->
                <div class="col-md-6 mb-4">

                    <div class="card card-custom shadow-sm border-0 h-100">

                        <div class="card-body p-4">

                            <h4 class="card-title text-theme-dark">

                                <i class="fas fa-user-tie mr-2 text-warning"></i>

                                Muhammad Syahrul Mubarok

                            </h4>

                            <hr>

                            <ul class="list-unstyled mb-0 text-dark prestasi-list">

                                <li>
                                    <i class="fas fa-trophy icon-prestasi fa-lg mr-2"></i>

                                    <strong>Prestasi:</strong>

                                    Menjadi Ketua Magang di Content Garage.
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>


                <!-- 2. Muhamad Nauval Zdakwan Utomo -->
                <div class="col-md-6 mb-4">

                    <div class="card card-custom shadow-sm border-0 h-100">

                        <div class="card-body p-4">

                            <h4 class="card-title text-theme-dark">

                                <i class="fas fa-user-tie mr-2 text-warning"></i>

                                Muhamad Nauval Zdakwan Utomo

                            </h4>

                            <hr>

                            <ul class="list-unstyled mb-0 text-dark prestasi-list">

                                <li>
                                    <i class="fas fa-medal icon-prestasi fa-lg mr-2"></i>

                                    Juara 1 Kumite Karate 65KG Provinsi Jatim Kacabdin.
                                </li>

                                <li>
                                    <i class="fas fa-medal icon-prestasi fa-lg mr-2"></i>

                                    Juara 3 Karate Kacabdin Pasuruan.
                                </li>

                                <li>
                                    <i class="fas fa-chess icon-prestasi fa-lg mr-2"></i>

                                    Juara Kampung Catur 2023.
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>


                <!-- 3. Mey Lujeng Trisnawati -->
                <div class="col-md-6 mb-4">

                    <div class="card card-custom shadow-sm border-0 h-100">

                        <div class="card-body p-4">

                            <h4 class="card-title text-theme-dark">

                                <i class="fas fa-user-tie mr-2 text-warning"></i>

                                Mey Lujeng Trisnawati

                            </h4>

                            <hr>

                            <ul class="list-unstyled mb-0 text-dark prestasi-list">

                                <li>
                                    <i class="fas fa-award icon-prestasi fa-lg mr-2"></i>

                                    <strong>Prestasi:</strong>

                                    Siswa Terbaik Jurusan Keperawatan
                                    SMK BIM Kota Mojokerto.
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>


                <!-- 4. Sofia Meidiana -->
                <div class="col-md-6 mb-4">

                    <div class="card card-custom shadow-sm border-0 h-100">

                        <div class="card-body p-4">

                            <h4 class="card-title text-theme-dark">

                                <i class="fas fa-user-tie mr-2 text-warning"></i>

                                Sofia Meidiana

                            </h4>

                            <hr>

                            <ul class="list-unstyled mb-0 text-dark prestasi-list">

                                <li>
                                    <i class="fas fa-medal icon-prestasi fa-lg mr-2"></i>

                                    <strong>Prestasi:</strong>

                                    Juara 2 National Applied Science Project
                                    Olympiad 2025.
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Tombol Navigasi -->
            <div class="text-center mt-4">

                <a href="{{ url('/') }}" class="btn btn-custom-light">

                    <i class="fas fa-arrow-left mr-2"></i>

                    Kembali ke Beranda

                </a>

            </div>

        </div>

    </div>


    <!-- JS Dependencies -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/parallax.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>