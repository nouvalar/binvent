@extends('layout.main')

@section('content')
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="#page-top">
      <img src="{{ asset('assets/img/logo-binayasa-warna.png') }}" alt="Logo Binayasa" style="height: 150px; width: auto;">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#login">Log In</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentangweb">Tentang Web</a></li>
        <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>
@endSection