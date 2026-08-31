@extends('layout')

@section('content')
<!-- TAMBAHKAN KODE CSS INI -->
<style>
  .team-section {
    /* Membuat background setengah kuning (#f4c150) dan setengah putih */
    background: linear-gradient(to bottom, #f4c150 55%, #ffffff 45%);
    padding: 80px 0 50px 0;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
  }
  .team-title {
    color: white;
    font-size: 4rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 5px;
  }
  .team-subtitle {
    color: white;
    font-size: 1.1rem;
    margin-bottom: 60px;
  }
  .team-member img {
    width: 160px;
    height: 160px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid white; /* Efek list putih */
    box-shadow: 0 0 0 2px #f4c150, 0 5px 15px rgba(0,0,0,0.1); /* Efek garis kuning di luar */
    margin-bottom: 20px;
  }
  .team-member h4 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 2px;
  }
  .team-member .role {
    font-size: 0.9rem;
    color: #888;
    font-style: italic;
    margin-bottom: 15px;
  }
  .team-member .desc {
    font-size: 0.85rem;
    color: #999;
    padding: 0 15px;
    line-height: 1.6;
  }
</style>

<!-- BAGIAN SECTION KELOMPOK 2 -->
<section class="team-section">
  <div class="container-fluid">
    <h1 class="team-title">Kelompok 2</h1>
    <p class="team-subtitle">Tugas Minggu 2 - Framework Laravel 12</p>

    <div class="row mt-4">
      <!-- Anggota 1 -->
      <div class="col-lg-3 col-md-6 team-member mb-4">
        <img src="https://ui-avatars.com/api/?name=Mey+Lujeng&background=random&size=200" alt="Mey Lujeng">
        <h4>Mey Lujeng Trisnawati</h4>
        <div class="role">Anggota Kelompok</div>
        <p class="desc">Berperan dalam menyusun struktur view dan routing dasar pada project ini.</p>
      </div>

      <!-- Anggota 2 -->
      <div class="col-lg-3 col-md-6 team-member mb-4">
        <img src="https://ui-avatars.com/api/?name=Muhamad+Nauval&background=random&size=200" alt="Muhamad Nauval">
        <h4>Muhamad Nauval Zdakwan U.</h4>
        <div class="role">Anggota Kelompok</div>
        <p class="desc">Berperan dalam mengatur layout dan implementasi desain template Bootstrap.</p>
      </div>

      <!-- Anggota 3 -->
      <div class="col-lg-3 col-md-6 team-member mb-4">
        <img src="https://ui-avatars.com/api/?name=Muhammad+Syahrul&background=random&size=200" alt="Muhammad Syahrul">
        <h4>Muhammad Syahrul M.</h4>
        <div class="role">Anggota Kelompok</div>
        <p class="desc">Berperan dalam integrasi Git dan memastikan versi project berjalan lancar.</p>
      </div>

      <!-- Anggota 4 -->
      <div class="col-lg-3 col-md-6 team-member mb-4">
        <img src="https://ui-avatars.com/api/?name=Sofia+Meidiana&background=random&size=200" alt="Sofia Meidiana">
        <h4>Sofia Meidiana</h4>
        <div class="role">Anggota Kelompok</div>
        <p class="desc">Berperan dalam menyusun konten biodata, pendidikan, dan presentasi tugas.</p>
      </div>
    </div>
  </div>
</section>

<!-- BAGIAN MINI PROFILE LAMA (Meja Kayu) DI BAWAHNYA -->
<section id="tmWelcome" class="parallax-window" data-parallax="scroll" data-image-src="img/mini-profile-bg-01.jpg">
   <!-- ... (Kode bawaan dari template untuk bagian welcome/meja kayu taruh di sini) ... -->
</section>
@endsection