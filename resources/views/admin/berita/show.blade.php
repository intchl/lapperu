@extends('admin.layout.master')

@section('title', 'Detail Berita')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Detail Berita</h5>
            <div class="d-flex gap-2">
                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm text-white">
                    Edit
                </a>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary btn-sm">
                    Kembali
                </a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-10">

                        {{-- JUDUL --}}
                        <h2 class="fw-bold mb-2">
                            {{ $berita->judul }}
                        </h2>

                        {{-- META --}}
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <span class="text-muted small">
                                <i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
                            </span>

                            <span class="text-muted small">
                                <i class="fas fa-eye me-1"></i>
                                Dilihat {{ $berita->dilihat }} kali
                            </span>

                            <span class="badge bg-light-success text-success px-3">
                                Published
                            </span>
                        </div>

                        <hr class="opacity-10">

                        {{-- FOTO --}}
                        @if ($berita->foto)
                            <div class="text-center mb-4">
                                <img 
                                    src="{{ asset('images/berita/' . $berita->foto) }}" 
                                    class="img-fluid rounded shadow-sm w-100"
                                    style="max-height:450px; object-fit:cover;"
                                >
                            </div>
                        @endif

                        {{-- ISI --}}
                        <div class="article-content"
                             style="line-height:1.8; font-size:1.1rem; color:#333;">
                            {!! nl2br(e($berita->isi)) !!}
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
