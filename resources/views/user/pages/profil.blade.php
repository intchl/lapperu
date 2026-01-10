@extends('user.layout.master')


@section('content')
        {{-- Tentang Kami Start --}}
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                    </div>
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="sub-title pe-3">Tentang Kami</h5>
                        <p class="mb-4">Lembaga Pemasyarakatan (Lapas) Perempuan Kelas IIA Pekanbaru adalah Unit Pelaksana Teknis (UPT) yang beroperasi di bawah naungan Direktorat Jenderal Pemasyarakatan. Instansi ini berlokasi di Jl. Bindanak No. 1, Kelurahan Tangkerang Utara, Kecamatan Bukit Raya, Kota Pekanbaru, Riau.</p>

                        <p>Lapas ini dibentuk berdasarkan Keputusan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia Nomor M.HH-10.OT.01.01 Tahun 2016. Awalnya, Lapas ini menempati gedung yang sama dengan Lembaga Pembinaan Khusus Anak (LPKA), namun sejak 29 April 2019, bangunan tersebut secara resmi diserahkan sepenuhnya untuk operasional Lapas Perempuan Kelas IIA Pekanbaru. Fasilitas ini memiliki luas tanah 9.000 m² dengan luas bangunan 4.772 m².</p>

                        <p> September 2025, Lapas ini melayani 539 orang penghuni, yang terdiri dari narapidana, tahanan, anak binaan, dan anak bawaan.</p>
                        
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
                                        <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">(0761) 8402148</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tentang Kami End --}}

        {{-- Visi Misi Start --}}
        <div class="container-fluid py-5 bg-light">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h5 class="sub-title px-3">Landasan Kerja</h5>
                    <h1 class="display-5 mb-4">Visi & Misi Kami</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-sm h-100 p-4" style="border-left: 5px solid #003a66 !important;">
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-lg-square bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-eye fa-lg"></i>
                                </div>
                                <h2 class="mb-0">Visi</h2>
                            </div>
                            <p class="fs-5 text-muted shadow-none border-0" style="font-style: italic;">
                                "Pulihnya kesatuan hubungan hidup, kehidupan, dan penghidupan warga binaan pemasyarakatan sebagai individu, anggota masyarakat, dan makhluk Tuhan Yang Maha Esa"
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm h-100 p-4" style="border-left: 5px solid #e02454 !important;">
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-lg-square bg-secondary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-bullseye fa-lg"></i>
                                </div>
                                <h2 class="mb-0">Misi</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-3">
                                    <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                                    <span>Melaksanakan pembinaan narapidana dan anak didik secara profesional.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                                    <span>Meningkatkan kualitas pelayanan pemasyarakatan berbasis hak asasi manusia (HAM).</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                                    <span>Mewujudkan tata tertib pemasyarakatan yang aman, kondusif, dan terkendali.</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                                    <span>Membangun sumber daya aparatur yang bersih, kompeten, dan berintegritas tinggi.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Visi Misi End --}}

        {{-- Tugas and Fungsi Start --}}
        <div class="container-fluid py-5 ">
            <div class="container py-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 50px;">
                            <div class="sub-style">
                                <h5 class="sub-title text-primary px-3">Landasan Kerja</h5>
                            </div>
                            <h1 class="display-5 mb-4">Tugas & Fungsi Kami</h1>
                            <p class="mb-0">Lapas Perempuan Kelas IIA Pekanbaru berkomitmen memberikan pelayanan dan pembinaan terbaik berdasarkan hukum dan kemanusiaan.</p>
                </div>

                <div class="row g-4">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-white rounded shadow-sm p-4 p-md-5 d-flex flex-column flex-md-row align-items-center" style="border-top: 5px solid #0056b3;">
                            <div class="btn-lg-square bg-primary text-white rounded-circle mb-3 mb-md-0 me-md-4 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 80px; height: 80px;">
                                <i class="fas fa-briefcase fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="mb-2">Tugas Pokok</h3>
                                <p class="fs-5 mb-0 text-dark">Melaksanakan pemasyarakatan narapidana dan anak didik secara profesional dan akuntabel.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="h-100 bg-white p-4 rounded shadow-sm border-bottom border-primary border-3 transition-hover">
                            <i class="fas fa-user-graduate fa-2x text-primary mb-3"></i>
                            <h5>Pembinaan</h5>
                            <p class="small text-muted mb-0">Melakukan pembinaan narapidana dan anak didik secara terukur.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="h-100 bg-white p-4 rounded shadow-sm border-bottom border-warning border-3">
                            <i class="fas fa-tools fa-2x text-warning mb-3"></i>
                            <h5>Bimbingan Kerja</h5>
                            <p class="small text-muted mb-0">Mempersiapkan sarana, memberikan bimbingan, dan mengelola hasil kerja.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100 bg-white p-4 rounded shadow-sm border-bottom border-info border-3">
                            <i class="fas fa-heart fa-2x text-info mb-3"></i>
                            <h5>Sosial & Rohani</h5>
                            <p class="small text-muted mb-0">Melakukan bimbingan sosial dan kerohanian bagi warga binaan.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="h-100 bg-white p-4 rounded shadow-sm border-bottom border-danger border-3">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-shield-alt fa-2x text-danger me-3"></i>
                                <div>
                                    <h5>Keamanan & Tata Tertib</h5>
                                    <p class="small text-muted mb-0">Pemeliharaan keamanan dan ketertiban lingkungan Lembaga Pemasyarakatan.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="h-100 bg-white p-4 rounded shadow-sm border-bottom border-success border-3">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-file-invoice fa-2x text-success me-3"></i>
                                <div>
                                    <h5>Tata Usaha</h5>
                                    <p class="small text-muted mb-0">Mengelola urusan administrasi, tata usaha, dan rumah tangga lembaga.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tugas and Fungsi End --}}

        {{-- Social Media Start --}}
        <div class="container-fluid bg-light social-media overflow-hidden py-5">
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
                                <a href="https://www.instagram.com/lpperempuanpekanbaru/?hl=en" target="_blank" class="social-item d-block text-decoration-none">
                                    <i class="fab fa-instagram fa-5x" style="color: #E1306C;"></i>
                                    <div class="mt-3">
                                        <span class="social-text instagram-text fs-5 d-block fw-bold">Instagram</span>
                                        <small class="text-muted">@lpperempuanpekanbaru</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                                <a href="https://www.facebook.com/people/lpperempuanpekanbaru/100089841414386/" target="_blank" class="social-item d-block text-decoration-none">
                                    <i class="fab fa-facebook-f fa-5x" style="color: #1877F2;"></i>
                                    <div class="mt-3">
                                        <span class="social-text facebook-text fs-5 d-block fw-bold">Facebook</span>
                                        <small class="text-muted">Lapas Perempuan Pekanbaru</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                                <a href="https://www.tiktok.com/@lapasperempuanpkbr" target="_blank" class="social-item d-block text-decoration-none">
                                    <i class="fab fa-tiktok fa-5x" style="color: #000000;"></i>
                                    <div class="mt-3">
                                        <span class="social-text tiktok-text fs-5 d-block fw-bold">TikTok</span>
                                        <small class="text-muted">@lapasperempuanpkbr </small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                                <a href="https://x.com/LppPku/" target="_blank" class="social-item d-block text-decoration-none">
                                    <i class="fab fa-twitter fa-5x" style="color: #1877F2;"></i>
                                    <div class="mt-3">
                                        <span class="social-text x-text fs-5 d-block fw-bold">X (Twitter)</span>
                                        <small class="text-muted">@lpp_pku</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
        </div>
        {{-- Social Media End --}}
@endsection