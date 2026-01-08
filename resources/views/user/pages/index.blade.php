@extends('user.layout.master')

@section('content')

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-flex align-items-center justify-content-center">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <img src="img/logo-resmi.png" alt="Logo" class="img mb-4 wow fadeInDown" data-wow-delay="0.1s" style="max-height: 100px; width: auto;">
                                
                                <h6 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.2s">
                                    LEMBAGA PEMASYARAKATAN PEREMPUAN KELAS IIA PEKANBARU
                                </h6>
                                
                                <h1 class="display-4 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.4s">
                                    Pelayanan Prima dengan Semangat Integritas
                                </h1>
                                
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.6s">
                                    Lapas Perempuan Kelas IIA Pekanbaru berkomitmen memberikan pembinaan kepribadian dan kemandirian demi membentuk warga binaan yang produktif dan siap kembali ke masyarakat
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                    </div>
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="sub-title pe-3">Tentang Kami</h5>
                        <h1 class="display-5 mb-4">Wadah Pembinaan Profesional Bagi Kemandirian Warga Binaan.</h1>
                        <p class="mb-4">Lapas Perempuan Kelas IIA Pekanbaru berkomitmen menjadi institusi yang humanis dalam melaksanakan rehabilitasi sosial. Kami berfokus pada inovasi pembinaan karakter dan keterampilan agar warga binaan siap kembali ke masyarakat dengan martabat dan keahlian baru.</p>
                        
                        <div class="row gy-4 align-items-center">
                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                <i class="fas fa-hand-holding-heart fa-3x text-secondary"></i>
                                <h5 class="ms-4">Pembinaan Terpadu & Humanis</h5>
                            </div>
                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                <i class="fas fa-certificate fa-3x text-secondary"></i>
                                <h5 class="ms-4">Sertifikasi Keahlian Kerja</h5>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="bg-light text-center rounded p-3">
                                    <div class="mb-2">
                                        <i class="fas fa-award fa-4x text-primary"></i>
                                    </div>
                                    <h1 class="display-5 fw-bold mb-2">25</h1>
                                    <p class="text-muted mb-0">Tahun Mengabdi</p>
                                </div>
                            </div>
                            
                            <div class="col-8 col-md-9">
                                <div class="mb-5">
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Pendampingan Spiritual & Karakter 100%</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Pelatihan Keterampilan Berbasis Output</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Layanan Kesehatan & Psikososial Terjamin</p>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                        <a href="tel:0761xxxxxx" class="position-relative wow tada" data-wow-delay=".9s">
                                            <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                            <div class="position-absolute" style="top: 0; left: 25px;">
                                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <span class="text-primary">Ada pertanyaan terkait layanan?</span>
                                        <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">(0761) 123 4567</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Layanan Start -->
        <div class="container-fluid training overflow-hidden bg-light py-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">LAYANAN SIJITU</h5>
                    </div>
                    <h1 class="display-5 mb-4">Kemudahan Akses Layanan Pemasyarakatan</h1>
                    <p class="mb-0">SiJitu hadir sebagai solusi digital terintegrasi untuk memberikan pelayanan prima yang transparan, cepat, dan akuntabel bagi masyarakat maupun Warga Binaan Pemasyarakatan.</p>
                </div>
                <div class="row g-4 layanan">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="/daftar-pengunjung" class="text-decoration-none">
                        <div class="counter h-100">
                            <div class="counter-icon">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div class="counter-content">
                                <h3>PENDAFTARAN PENGUNJUNG</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="/layanan-wbp" class="text-decoration-none">
                        <div class="counter h-100">
                            <div class="counter-icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div class="counter-content">
                                <h3>LAYANAN WBP</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="/berita" class="text-decoration-none">
                        <div class="counter h-100">
                            <div class="counter-icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <div class="counter-content">
                                <h3>INFO & BERITA</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <a href="/produk-wbp" class="text-decoration-none">
                        <div class="counter h-100">
                            <div class="counter-icon">
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                            <div class="counter-content">
                                <h3>PRODUK WBP</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            </div>
        </div>
        {{-- Layanan End --}}

        {{-- Berita Start --}}
        <div class="container-fluid features overflow-hidden py-5">
            <div class="container py-5">
                 <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">SEPUTAR LAPAS PEREMPUAN PEKANBARU</h5>
                    </div>
                    <h1 class="display-5 mb-4">Informasi dan Berita Terkini</h1>
                    <p class="mb-0">Simak berita terbaru, dokumentasi pembinaan, dan pengumuman resmi dari Lapas Perempuan Kelas IIA Pekanbaru sebagai wujud keterbukaan informasi publik.</p>
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
                    <div class="col-12">
                                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="/berita">Selengkapnya</a>
                            </div>
                </div>
            </div>
        </div>
        {{-- Berita End --}}

        {{-- Maklumat Start --}}
        <div class="container-fluid training overflow-hidden bg-light py-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3 text-uppercase">STANDAR PELAYANAN</h5>
                    </div>
                    <h1 class="display-5 mb-4">MAKLUMAT PELAYANAN</h1>
                    <p class="mb-0">“Dengan ini, kami seluruh penyelenggara
                    LEMBAGA PEMASYARAKATAN KELAS IIB LUMAJANG
                    Menyatakan sanggup menyelenggarakan pelayanan (Layanan Pembinaan Narapidana,
                    Bimbingan Kerja, Layanan Kunjungan, Layanan Informasi,  Layanan Pengaduan,
                    dan Layanan Kesehatan) sesuai standar pelayanan yang telah ditetapkan dan apabila
                    tidak menepati janji ini, kami siap menerima  sanksi sesuai dengan peraturan
                    perundang-undangan yang berlaku”

                    <p>Lumajang, 22 Januari 2025</p>
                    <p>KEPALA LEMBAGA PEMASYARAKATAN KELAS IIB LUMAJANG</p>

                    <p>TTD</p>

                    <p>MAHENDRA SULAKSANA</p>
                </p>
                </div>
            </div>
        </div>
        {{-- Maklumat End --}}

        <!-- Social Media Start -->
        <div class="container-fluid social-media overflow-hidden py-5">
            <div class="container">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 50px;">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">HUBUNG KAMI</h5>
                    </div>
                    <h1 class="display-5 mb-4">Koneksi Melalui Media Sosial</h1>
                    <p class="mb-0">Ikuti kami untuk informasi terkini seputar Lapas Perempuan Kelas IIA Pekanbaru.</p>
                </div>

                <div class="row g-4 text-center justify-content-center">
                    <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="https://www.instagram.com/lpp_pekanbaru/" target="_blank" class="social-item d-block text-decoration-none">
                            <i class="fab fa-instagram fa-5x" style="color: #E1306C;"></i>
                            <span class="social-text instagram-text fs-5">Instagram</span>
                        </a>
                    </div>

                    <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="https://www.facebook.com/lpp.pekanbaru" target="_blank" class="social-item d-block text-decoration-none">
                            <i class="fab fa-facebook-f fa-5x" style="color: #1877F2;"></i>
                            <span class="social-text facebook-text fs-5">Facebook</span>
                        </a>
                    </div>

                    <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="https://www.tiktok.com/@lpp_pekanbaru" target="_blank" class="social-item d-block text-decoration-none">
                            <i class="fab fa-tiktok fa-5x" style="color: #000000;"></i>
                            <span class="social-text tiktok-text fs-5">TikTok</span>
                        </a>
                    </div>

                    <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                        <a href="https://x.com/lpp_pekanbaru" target="_blank" class="social-item d-block text-decoration-none">
                            <i class="fab fa-twitter fa-5x" style="color: #1877F2;"></i>
                            <span class="social-text x-text fs-5">X (Twitter)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Social Media End -->
@endsection