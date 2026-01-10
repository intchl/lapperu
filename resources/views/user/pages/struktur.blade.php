@extends('user.layout.master')


@section('content')
<div class="container-fluid py-5 ">
    <div class="container">
        <div class="section-title text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <div class="sub-style"><h5 class="sub-title text-primary px-3">Manajemen</h5></div>
            <h1 class="display-5 mb-4">Struktur Organisasi</h1>
            <p class="mb-0 text-muted">Lapas Perempuan Kelas IIA Pekanbaru</p>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            <div class="col-lg-4 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="position-relative d-inline-block">
                    <img src="img/kalapas.jpg" class="rounded-circle img-thumbnail mb-3" style="width: 180px; height: 180px; object-fit: cover;" alt="Kepala Lapas">
                </div>
                <h5 class="mb-1 text-uppercase">Endang Sriwati</h5>
                <p class="text-primary mb-0">Kepala Lembaga Pemasyarakatan</p>
                {{-- <small class="text-muted">NIP. 19xxxxxxxxxxxxxx</small> --}}
            </div>
        </div>

        <div class="row g-4 text-center justify-content-center">
            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.3s">
                <img src="img/kplp.png" class="rounded-circle img-thumbnail mb-2" style="width: 110px; height: 110px; object-fit: cover;">
                <h6 class="mb-1 text-uppercase">Yossy Miruchi</h6>
                <p class="small text-primary mb-0">Ka. KPLP</p>
            </div>
            
            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.4s">
                <img src="img/pejabat2.jpg" class="rounded-circle img-thumbnail mb-2" style="width: 110px; height: 110px; object-fit: cover;">
                <h6 class="mb-1 text-uppercase">Benny Afman</h6>
                <p class="small text-primary  mb-0">Kasubag TU</p>
            </div>

            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.5s">
                <img src="img/binadik.png" class="rounded-circle img-thumbnail mb-2" style="width: 110px; height: 110px; object-fit: cover;">
                <h6 class="mb-1 text-uppercase">Hesti Yunita</h6>
                <p class="small text-primary mb-0">Kasi Binadik</p>
            </div>

            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.6s">
                <img src="img/pejabat4.jpg" class="rounded-circle img-thumbnail mb-2" style="width: 110px; height: 110px; object-fit: cover;">
                <h6 class="mb-1 text-uppercase">Mulyani</h6>
                <p class="small text-primary mb-0">Kasi Giatja</p>
            </div>

            <div class="col-md-6 col-lg-2 wow fadeInUp" data-wow-delay="0.7s">
                <img src="img/kamtib.png" class="rounded-circle img-thumbnail mb-2" style="width: 110px; height: 110px; object-fit: cover;">
                <h6 class="mb-1 text-uppercase">Silviwanti</h6>
                <p class="small text-primary mb-0">Kasi Adm Kamtib</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <div class="col-12">
                <h2 class="display-6 mb-5 text-center">Rincian Tugas & Fungsi</h2>
                
                <div class="accordion" id="accordionTugas">
                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTU">
                                1. SUB BAGIAN TATA USAHA
                            </button>
                        </h2>
                        <div id="collapseTU" class="accordion-collapse collapse" data-bs-parent="#accordionTugas">
                            <div class="accordion-body bg-light">
                                <p><strong>Tugas:</strong> Melakukan urusan tata usaha dan rumah tangga LAPAS.</p>
                                <p><strong>Fungsi:</strong> Urusan kepegawaian, keuangan, surat-menyurat, dan rumah tangga.</p>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>a. Urusan Kepegawaian dan Keuangan</h6>
                                        <p class="small text-muted">Tugas: Melakukan urusan kepegawaian dan keuangan.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>b. Urusan Umum</h6>
                                        <p class="small text-muted">Tugas: Melakukan surat-menyurat, perlengkapan dan rumah tangga.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBinadik">
                                2. SEKSI BIMBINGAN NARAPIDANA / ANAK DIDIK
                            </button>
                        </h2>
                        <div id="collapseBinadik" class="accordion-collapse collapse" data-bs-parent="#accordionTugas">
                            <div class="accordion-body bg-light">
                                <p><strong>Tugas:</strong> Memberikan bimbingan pemasyarakatan narapidana / anak didik.</p>
                                <hr>
                                <h6>Sub Seksi Registrasi:</h6>
                                <p class="small text-muted">Pencatatan, statistik, dan dokumentasi sidik jari.</p>
                                <h6>Sub Seksi Bimkemas & Perawatan:</h6>
                                <p class="small text-muted">Bimbingan rohani, olahraga, kesehatan, asimilasi, dan kesejahteraan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGiatja">
                                3. SEKSI KEGIATAN KERJA
                            </button>
                        </h2>
                        <div id="collapseGiatja" class="accordion-collapse collapse" data-bs-parent="#accordionTugas">
                            <div class="accordion-body bg-light">
                                <p><strong>Tugas:</strong> Memberikan bimbingan kerja, mempersiapkan sarana kerja dan mengolah hasil kerja.</p>
                                <hr>
                                <h6>Sub Seksi Bimbingan Kerja & Pengelolaan Hasil:</h6>
                                <p class="small text-muted">Memberikan petunjuk bimbingan latihan kerja dan mengolah hasilnya.</p>
                                <h6>Sub Seksi Sarana Kerja:</h6>
                                <p class="small text-muted">Mempersiapkan fasilitas sarana kerja.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKamtib">
                                4. SEKSI ADMINISTRASI KEAMANAN DAN TATA TERTIB
                            </button>
                        </h2>
                        <div id="collapseKamtib" class="accordion-collapse collapse" data-bs-parent="#accordionTugas">
                            <div class="accordion-body bg-light">
                                <p><strong>Tugas:</strong> Mengatur jadwal tugas pengamanan, perlengkapan, dan penegakan tata tertib.</p>
                                <hr>
                                <h6>Sub Seksi Keamanan:</h6>
                                <p class="small text-muted">Mengatur jadwal tugas dan pembagian tugas pengamanan.</p>
                                <h6>Sub Seksi Pelaporan & Tata Tertib:</h6>
                                <p class="small text-muted">Menerima laporan harian dan menyusun laporan berkala keamanan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKPLP">
                                5. KESATUAN PENGAMANAN LAPAS (KPLP)
                            </button>
                        </h2>
                        <div id="collapseKPLP" class="accordion-collapse collapse" data-bs-parent="#accordionTugas">
                            <div class="accordion-body bg-light">
                                <p><strong>Tugas:</strong> Menjaga keamanan dan ketertiban LAPAS.</p>
                                <p><strong>Fungsi:</strong> Penjagaan, pengawasan, pemeliharaan tata tertib, dan pengawalan narapidana.</p>
                                <div class="bg-white p-2 border-start border-4 border-danger small mt-2">
                                    Ka. KPLP bertanggung jawab langsung kepada Kepala LAPAS.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection