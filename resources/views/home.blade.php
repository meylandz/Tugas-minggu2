@extends('layout')

@section('content')
<style>
  /* --- ANIMASI SLIDE UP --- */
  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(50px); /* Mulai dari 50px di bawah */
    }
    to {
      opacity: 1;
      transform: translateY(0);    /* Posisi normal */
    }
  }

  .animate-title {
    animation: slideUp 0.8s ease-out forwards;
  }

  .animate-card {
    opacity: 0; /* Sembunyikan dulu sebelum animasi berjalan */
    animation: slideUp 0.8s ease-out forwards;
  }

  /* Delay bergantian agar muncul satu per satu */
  .delay-1 { animation-delay: 0.2s; }
  .delay-2 { animation-delay: 0.4s; }
  .delay-3 { animation-delay: 0.6s; }
  .delay-4 { animation-delay: 0.8s; }

  /* --- STYLE HALAMAN --- */
  .our-team-section {
    background: linear-gradient(to bottom, #f4b942 55%, #ffffff 45%);
    padding: 80px 0;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    overflow: hidden;
  }
  .team-header-title {
    color: white;
    font-size: 5rem;
    font-weight: 800;
    text-transform: uppercase;
    margin-bottom: 0;
    letter-spacing: 2px;
  }
  .team-header-subtitle {
    color: white;
    font-size: 1.1rem;
    font-style: italic;
    margin-bottom: 60px;
  }
  .member-photo {
    width: 170px;
    height: 170px;
    object-fit: cover;
    border-radius: 50%;
    border: 6px solid white; 
    box-shadow: 0 0 0 2px #f4b942;
    margin-bottom: 25px;
    background-color: #fff;
    transition: transform 0.3s ease;
  }
  .member-photo:hover {
    transform: scale(1.08); /* Efek zoom halus saat kursor diarahkan */
  }
  .member-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 2px;
  }
  .member-role {
    font-size: 0.9rem;
    color: #888;
    font-style: italic;
    margin-bottom: 10px;
  }
  .member-desc {
    font-size: 0.85rem;
    color: #a0a0a0;
    line-height: 1.5;
    padding: 0 15px;
  }
</style>

<section class="our-team-section">
  <div class="container-fluid">
    <!-- Judul Animasi -->
    <div class="animate-title">
      <h1 class="team-header-title">OUR TEAM</h1>
      <p class="team-header-subtitle">yes we know, people say we are crazy</p>
    </div>

    <div class="row mt-5">
      <!-- Anggota 1 -->
      <div class="col-lg-3 col-md-6 mb-5 animate-card delay-1">
        <img src="{{ asset('img/img/foto-anggota-1.jpeg') }}" alt="Mey Lujeng" class="member-photo">
        <h4 class="member-name">Mey Lujeng Trisnawati</h4>
        <div class="member-role">e41250117</div>
        <p class="member-desc">Mahasiswa aktif politeknik Negeri jember</p>
      </div>

      <!-- Anggota 2 -->
      <div class="col-lg-3 col-md-6 mb-5 animate-card delay-2">
        <img src="{{ asset('img/img/foto-anggota-2.jpeg') }}" alt="Muhamad Nauval" class="member-photo">
        <h4 class="member-name">Muhamad Nauval Zdakwan Utomo</h4>
        <div class="member-role">e41250002</div>
        <p class="member-desc">Mahasiswa aktif politeknik Negeri jember</p>
      </div>

      <!-- Anggota 3 -->
      <div class="col-lg-3 col-md-6 mb-5 animate-card delay-3">
       <img src="{{ asset('img/img/foto-anggota-3.jpeg') }}" alt="Muhammad Syahrul" class="member-photo">
        <h4 class="member-name">Muhammad Syahrul Mubarok</h4>
        <div class="member-role">e41251463</div>
        <p class="member-desc">Mahasiswa aktif politeknik Negeri jember</p>
      </div>

      <!-- Anggota 4 -->
      <div class="col-lg-3 col-md-6 mb-5 animate-card delay-4">
        <img src="{{ asset('img/img/foto-anggota-4.jpeg') }}" alt="Sofia Meidiana" class="member-photo">
        <h4 class="member-name">Sofia Meidiana</h4>
        <div class="member-role">e41251542</div>
        <p class="member-desc">Mahasiswa aktif politeknik Negeri jember</p>
      </div>
    </div>
  </div>
</section>
@endsection