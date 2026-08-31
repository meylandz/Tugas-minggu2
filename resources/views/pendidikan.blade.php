<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pendidikan - Muhamad Nauval Zdakwan Utomo</title>
    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
</head>
<body>

    <!-- Hero / Parallax Section -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/mini-profile-bg-01.jpg') }}">
        <div class="container text-center py-5 text-white">
            <h1 class="display-4 font-weight-bold"><i class="fas fa-graduation-cap mr-2"></i>Riwayat Pendidikan</h1>
            <p class="lead">Jejak langkah akademik dari Sekolah Dasar hingga Sekolah Menengah Kejuruan.</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h3 class="card-title text-primary mb-4 border-bottom pb-2">
                            <i class="fas fa-history mr-2"></i>Timeline Pendidikan Akademik
                        </h3>

                        <!-- Timeline Item 1: SMK -->
                        <div class="media mb-4">
                            <div class="mr-3 text-primary fa-2x">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold">SMKN 1 Beji</h5>
                                <p class="text-muted mb-1"><small><i class="far fa-calendar-alt mr-1"></i> Sekolah Menengah Kejuruan</small></p>
                                <p class="mb-0">Menempuh pendidikan kejuruan di SMKN 1 Beji untuk mendalami bidang keahlian teknologi dan kejuruan.</p>
                            </div>
                        </div>

                        <hr>

                        <!-- Timeline Item 2: SMP -->
                        <div class="media mb-4">
                            <div class="mr-3 text-success fa-2x">
                                <i class="fas fa-book-reader"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold">SMPN 2 Beji</h5>
                                <p class="text-muted mb-1"><small><i class="far fa-calendar-alt mr-1"></i> Sekolah Menengah Pertama</small></p>
                                <p class="mb-0">Menyelesaikan pendidikan tingkat menengah pertama di SMPN 2 Beji.</p>
                            </div>
                        </div>

                        <hr>

                        <!-- Timeline Item 3: SD -->
                        <div class="media">
                            <div class="mr-3 text-warning fa-2x">
                                <i class="fas fa-child"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold">SDN Beji 1</h5>
                                <p class="text-muted mb-1"><small><i class="far fa-calendar-alt mr-1"></i> Sekolah Dasar</small></p>
                                <p class="mb-0">Menempuh masa pendidikan dasar pertama di SDN Beji 1.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tombol Navigasi -->
                <div class="text-center mt-4">
                    <a href="{{ url('/') }}" class="btn btn-secondary px-4">
                        <ins><i class="fas fa-arrow-left mr-2"></i>Kembali ke Beranda</ins>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- JS Dependencies -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
