@extends('user.layout.master')

@section('content')
<div class="container-fluid berita overflow-hidden py-5">
    <div class="container py-5">

        {{-- FOTO --}}
        <img src="{{ asset('images/berita/' . $berita->foto) }}"
             class="img-fluid mb-4 w-100 image-detail-berita"
             alt="{{ $berita->judul }}">

        <div>
            <h1 class="display-6 mb-3">{{ $berita->judul }}</h1>

            <div class="berita-meta d-flex flex-wrap align-items-center text-muted mb-4 pb-3 border-bottom">
                <div class="me-4 mb-2">
                    <i class="fas fa-user-circle me-2 text-secondary"></i>
                    Diposting oleh : Admin
                </div>

                <div class="me-4 mb-2">
                    <i class="fas fa-eye me-2 text-secondary"></i>
                    Dilihat : {{ $berita->dilihat }} Kali
                </div>

                <div class="w-100 d-block"></div>

                <div class="mb-0">
                    <i class="fas fa-calendar-alt me-2 text-secondary"></i>
                    {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                </div>
            </div>

            <div class="berita-content">
                {!! nl2br(e($berita->isi)) !!}
            </div>
        </div>

    </div>
</div>
@endsection
