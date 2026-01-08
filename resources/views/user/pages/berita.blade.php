@extends('user.layout.master')

@section('pages_name')
Berita Kami
@endsection

@section('content')
<div class="container-fluid features overflow-hidden py-5">
     <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">Berita Kami</h5>
            </div>
                   
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-4">
                        <img src="img/berita1.jpeg" class="img-fluid" alt="Berita Lumajang">
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h6 class="mb-3">LAPAS KELAS IIB LUMAJANG HASILKAN 50 TELUR AYAM PER HARI DARI PROGRAM PEMBINAAN PETERNAKAN</h6>
                            <a class="btn btn-secondary rounded-pill" href="/berita-detail">Baca selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-4">
                        <img src="img/berita1.jpeg" class="img-fluid" alt="Berita Lumajang">
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h6 class="mb-3">LAPAS KELAS IIB LUMAJANG HASILKAN 50 TELUR AYAM PER HARI DARI PROGRAM PEMBINAAN PETERNAKAN</h6>
                        <a class="btn btn-secondary rounded-pill" href="/berita-detail">Baca selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-4">
                        <img src="img/berita1.jpeg" class="img-fluid" alt="Berita Lumajang">
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h6 class="mb-3">LAPAS KELAS IIB LUMAJANG HASILKAN 50 TELUR AYAM PER HARI DARI PROGRAM PEMBINAAN PETERNAKAN</h6>
                        <a class="btn btn-secondary rounded-pill" href="#">Baca selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon mb-4">
                        <img src="img/berita1.jpeg" class="img-fluid" alt="Berita Lumajang">
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h6 class="mb-3">LAPAS KELAS IIB LUMAJANG HASILKAN 50 TELUR AYAM PER HARI DARI PROGRAM PEMBINAAN PETERNAKAN</h6>
                        <a class="btn btn-secondary rounded-pill" href="#">Baca selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection