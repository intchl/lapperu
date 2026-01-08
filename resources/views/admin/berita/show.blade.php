@extends('admin.layout.master')

@section('title', 'Berita')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <h5 class="mb-0">Detail Berita</h5>
        <div class="d-flex gap-2">
          <a href="/edit-berita/1" class="btn btn-warning btn-sm text-white">
            Edit
          </a>
          <a href="/berita" class="btn btn-secondary btn-sm">
            Kembali
          </a>
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <h2 class="fw-bold mb-2">Peluncuran Produk Kamera Mirrorless Terbaru 2024</h2>
              
              <div class="d-flex align-items-center gap-3 mb-4">
                <span class="text-muted small">
                  <i class="fas fa-calendar-alt me-1"></i> 10 Mei 2024
                </span>
                <span class="text-muted small">
                  <i class="fas fa-eye me-1"></i> Dilihat 1,240 kali
                </span>
                <span class="badge bg-light-success text-success px-3">Published</span>
              </div>

              <hr class="opacity-10">

              <div class="text-center mb-4">
                <img src="https://via.placeholder.com/800x400" alt="Foto Berita" 
                    class="img-fluid rounded shadow-sm w-100" style="max-height: 450px; object-fit: cover;">
                <p class="text-muted mt-2 small"><em>Keterangan Foto: Suasana peluncuran kamera di Jakarta.</em></p>
              </div>

              <div class="article-content" style="line-height: 1.8; font-size: 1.1rem; color: #333;">
                <p>
                  <strong>Jakarta, 10 Mei 2024</strong> — Hari ini perusahaan resmi meluncurkan kamera mirrorless terbaru dengan fitur autofokus berbasis AI yang sangat cepat. Produk ini ditujukan untuk para konten kreator profesional yang membutuhkan kualitas gambar tinggi dalam kondisi cahaya minim.
                </p>
                <p>
                  Dalam acara tersebut, CEO perusahaan menyatakan bahwa teknologi sensor terbaru ini mampu menangkap detail yang belum pernah ada sebelumnya. Selain itu, desain bodi yang lebih ringan memudahkan para petualang untuk membawa perangkat ini ke mana saja tanpa merasa terbebani.
                </p>
                <p>
                  Beberapa fitur unggulan yang diperkenalkan antara lain: 
                  <ul>
                    <li>Sensor Full-Frame 45 Megapixel.</li>
                    <li>Perekaman video 8K tanpa overheating.</li>
                    <li>Stabilisasi gambar internal hingga 8-stop.</li>
                  </ul>
                </p>
                <p>
                  Produk ini akan mulai tersedia di pasar Indonesia mulai akhir bulan depan dengan harga yang kompetitif di kelasnya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script src="{{ asset('admin/assets/js/plugins/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/pages/dashboard-default.js') }}"></script>
@endpush