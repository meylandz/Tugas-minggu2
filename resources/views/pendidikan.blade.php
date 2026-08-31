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
</head>
<body>

    <!-- Hero Section -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/mini-profile-bg-01.jpg') }}">
        <div class="container text-center py-5 text-white">
            <h1 class="display-4 font-weight-bold"><i class="fas fa-graduation-cap mr-2"></i>Riwayat Pendidikan</h1>
            <p class="lead">Perjalanan Akademik Seluruh Anggota Kelompok</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container my-5">
        <div class="row">

            <!-- 1. Mey Lujeng Trisnawati -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h4 class="card-title text-primary"><i class="fas fa-user-degree mr-2"></i>Mey Lujeng Trisnawati</h4>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-school text-primary mr-2"></i>
                                <strong>SMK:</strong> SMK Bhakti Indonesia Medika
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-book-reader text-success mr-2"></i>
                                <strong>SMP:</strong> SMPN 5 Kota Mojokerto
                            </li>
                            <li>
                                <i class="fas fa-child text-warning mr-2"></i>
                                <strong>SD:</strong> SDN Gunung Gedangan 1
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 2. Muhammad Syahrul Mubarok -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h4 class="card-title text-primary"><i class="fas fa-user-degree mr-2"></i>Muhammad Syahrul Mubarok</h4>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-school text-primary mr-2"></i>
                                <strong>SMK:</strong> SMKN 1 Beji
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-book-reader text-success mr-2"></i>
                                <strong>MTs:</strong> MTsN 2 Pasuruan
                            </li>
                            <li>
                                <i class="fas fa-child text-warning mr-2"></i>
                                <strong>MI:</strong> MIN 1 Pasuruan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 3. Sofia Meidiana -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h4 class="card-title text-primary"><i class="fas fa-user-degree mr-2"></i>Sofia Meidiana</h4>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-school text-primary mr-2"></i>
                                <strong>SMK:</strong> SMKN Kasiman
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-book-reader text-success mr-2"></i>
                                <strong>SMP:</strong> SMPN Kasiman
                            </li>
                            <li>
                                <i class="fas fa-child text-warning mr-2"></i>
                                <strong>SD:</strong> SDN Ngaglik 1
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 4. Muhamad Nauval Zdakwan Utomo -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h4 class="card-title text-primary"><i class="fas fa-user-degree mr-2"></i>Muhamad Nauval Zdakwan Utomo</h4>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-school text-primary mr-2"></i>
                                <strong>SMK:</strong> SMKN 1 Beji
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-book-reader text-success mr-2"></i>
                                <strong>SMP:</strong> SMPN 2 Beji
                            </li>
                            <li>
                                <i class="fas fa-child text-warning mr-2"></i>
                                <strong>SD:</strong> SDN Beji 1
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- Tombol Navigasi -->
        <div class="text-center mt-3">
            <a href="{{ url('/') }}" class="btn btn-secondary px-4">
                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Beranda
            </a>
        </div>
    </div>

    <!-- JS Dependencies -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
