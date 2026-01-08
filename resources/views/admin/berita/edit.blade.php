@extends('admin.layout.master')

@section('title', 'Berita')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <h5 class="mb-0">Edit Berita</h5>
        <a href="/berita" class="btn btn-secondary d-flex align-items-center gap-2">
          Kembali
        </a>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <form action="/update-berita/1" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
              <div class="col-md-8 mb-3">
                <label class="form-label fw-bold">Judul Berita</label>
                <input type="text" name="judul" class="form-control" 
                      value="Peluncuran Produk Kamera Mirrorless Terbaru 2024">
              </div>

              <div class="col-md-4 mb-3">
                <label class="form-label fw-bold">Tanggal Publish</label>
                <input type="date" name="tanggal" class="form-control" 
                      value="2024-05-10">
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label fw-bold">Foto Utama</label>
                <div class="mb-2">
                  <p class="small text-muted mb-1">Foto saat ini:</p>
                  <img src="https://via.placeholder.com/150x100" alt="Preview" 
                      class="img-thumbnail shadow-sm" style="height: 100px;">
                </div>
                <input type="file" name="foto" class="form-control" accept="image/*">
                <div class="form-text text-muted">
                  <i class="fas fa-info-circle"></i> Biarkan kosong jika tidak ingin mengganti foto.
                </div>
              </div>

              <div class="col-md-12 mb-4">
                <label class="form-label fw-bold">Isi Berita</label>
                <textarea name="isi" class="form-control" rows="8">Hari ini perusahaan resmi meluncurkan kamera mirrorless terbaru dengan fitur autofokus berbasis AI yang sangat cepat. Produk ini ditujukan untuk para konten kreator profesional yang membutuhkan kualitas gambar tinggi dalam kondisi cahaya minim...</textarea>
              </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
              <a href="/berita" class="btn btn-light border text-secondary">Batal</a>
              <button type="submit" class="btn btn-warning px-4 text-white fw-bold">
                Perbarui Berita
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script src="{{ asset('admin/assets/js/plugins/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/pages/dashboard-default.js') }}"></script>
@endpush