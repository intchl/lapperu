@extends('admin.layout.master')

@section('title', 'Berita')

@section('content')
  <!-- [ breadcrumb ] start -->
      {{-- <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Home</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Home</li>
              </ul>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Data Berita</h5>
            <a href="/tambah-berita" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="fas fa-plus"></i> Tambah Berita
            </a>
            </div>

            <div class="card tbl-card">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover table-borderless mb-0">
                    <thead>
                    <tr>
                        <th>TANGGAL</th>
                        <th>JUDUL</th>
                        <th>FOTO</th>
                        <th>ISI</th>
                        <th>DILIHAT</th>
                        <th class="text-center">AKSI</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span class="text-muted">10 Mei 2024</span></td>
                        <td><strong>Peluncuran Produk Baru</strong></td>
                        <td>
                        <img src="https://via.placeholder.com/50" alt="foto" class="rounded shadow-sm">
                        </td>
                        <td><span class="text-truncate d-inline-block" style="max-width: 150px;">Deskripsi mengenai peluncuran produk kamera terbaru...</span></td>
                        <td><span class="badge bg-light-primary text-primary">1,240 Kali</span></td>
                        <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <a href="/lihat-berita" class="btn btn-sm btn-light-info" title="Lihat">
                            <i class="fas fa-eye text-info"></i>
                            </a>
                            <a href="/edit-berita" class="btn btn-sm btn-light-warning" title="Edit">
                            <i class="fas fa-edit text-warning"></i>
                            </a>
                            <a href="/delete-berita" class="btn btn-sm btn-light-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash text-danger"></i>
                            </a>
                        </div>
                        </td>
                    </tr>

                    <tr>
                        <td><span class="text-muted">12 Mei 2024</span></td>
                        <td><strong>Tips Fotografi Makro</strong></td>
                        <td><img src="https://via.placeholder.com/50" alt="foto" class="rounded shadow-sm"></td>
                        <td><span class="text-truncate d-inline-block" style="max-width: 150px;">Cara mengambil foto detail menggunakan lensa...</span></td>
                        <td><span class="badge bg-light-primary text-primary">850 Kali</span></td>
                        <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <a href="/lihat-berita" class="btn btn-sm btn-light-info"><i class="fas fa-eye text-info"></i></a>
                            <a href="/edit-berita" class="btn btn-sm btn-light-warning"><i class="fas fa-edit text-warning"></i></a>
                            <a href="/delete-berita" class="btn btn-sm btn-light-danger"><i class="fas fa-trash text-danger"></i></a>
                        </div>
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
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