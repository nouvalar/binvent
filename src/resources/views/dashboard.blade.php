@extends('layout.main')

@section('content')

  <!-- Masthead-->
  <section id="login">
    <div class="container"></div>
  </section>
  <header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
      <div class="d-flex justify-content-center">
        <div class="text-center">
          <h2 class="text-white mx-auto mt-2 mb-5" style="font-size: 2rem; font-weight: bold;">
            Selamat Datang Di Binvent, Silahkan Log In Terlebih Dahulu
          </h2>
          <a class="btn btn-primary" href="{{ route('login') }}">Log In</a>
        </div>
      </div>
    </div>
  </header>
  <!-- About-->
  <section class="about-section text-center" id="tentangweb">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-8">
          <h2 class="text-white mb-4">Apa itu Binvent</h2>
          <p class="text-white-50">
            Binvent atau Binayasa Inventory adalah sistem manajemen inventaris yang dirancang khusus untuk mengelola stok barang di lingkungan kantor Binayasa.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact-->
  <section class="contact-section" id="kontak" style="background-color: #022859;">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Alamat</h4>
              <hr class="my-4 mx-auto" />
              <div class="small text-black-50">Rukan Crown Palace Blok A 29.
                Prof. DR. Soepomo, SH No. 231, Tebet, Jakarta Selatan 12870
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4 mx-auto" />
              <div class="small text-black-50"><a href="#!">binayasa@yahoo.co.id</a></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Telepon</h4>
              <hr class="my-4 mx-auto" />
              <div class="small text-black-50">021 830 1591 / 830 1592</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endSection