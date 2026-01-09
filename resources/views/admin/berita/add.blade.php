@extends('admin.layout.master')

@section('title', 'Berita')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <h5 class="mb-0">Tambah Berita</h5>
        <a href="/berita" class="btn btn-secondary d-flex align-items-center gap-2">
          Kembali
        </a>
      </div>

    
      <div class="card shadow-sm">
        <div class="card-body">
          <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            {{-- CSRF Token wajib ada di Laravel untuk keamanan form --}}
            @csrf

            <div class="row">
              <div class="col-md-8 mb-3">
                <label class="form-label fw-bold">Judul Berita</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul berita..." required>
              </div>

              <div class="col-md-4 mb-3">
                <label class="form-label fw-bold">Tanggal Publish</label>
                <input type="date" name="tanggal" class="form-control" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label fw-bold">Foto Utama</label>
                <input type="file" name="foto" class="form-control" accept="image/*" required>
                <div class="form-text">Format: JPG, PNG, atau WEBP. Maksimal 2MB.</div>
              </div>

              <div class="col-md-12 mb-4">
                <label class="form-label fw-bold">Isi Berita</label>
                <textarea name="isi" class="form-control" rows="8" placeholder="Tuliskan detail berita di sini..." required></textarea>
              </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
              <button type="reset" class="btn btn-light border">Reset</button>
              <button type="submit" class="btn btn-primary px-4">
                Simpan Berita
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