@extends('user.layout.master') 

@section('pages_name')
Berita Kami
@endsection

@section('content')
<div class="container-fluid features overflow-hidden py-5">
    <div class="container">

        <div class="section-title text-center mb-5">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">Berita</h5>
            </div>
            <h1 class="display-5 mb-4">Berita & Info Terkini</h1>
        </div>

        <div class="row g-4">

            @forelse ($berita as $item)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="feature-item text-center p-4 h-100">

                        <div class="feature-icon mb-4">
                            @if ($item->foto)
                                <img src="{{ asset('images/berita/' . $item->foto) }}" 
                                     class="img-fluid" 
                                     alt="{{ $item->judul }}">
                            @else
                                <img src="{{ asset('img/default-berita.jpg') }}" 
                                     class="img-fluid" 
                                     alt="Berita">
                            @endif
                        </div>

                        <div class="feature-content d-flex flex-column">
                            <h6 class="mb-3">
                                {{ Str::limit($item->judul, 80) }}
                            </h6>

                            <small class="text-muted mb-3">
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                            </small>

                            <a class="btn btn-secondary rounded-pill mt-auto"
                               href="{{ url('/berita-detail/' . $item->id) }}">
                                Baca selengkapnya
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Belum ada berita.</p>
                </div>
            @endforelse

        </div>
    </div>
</div>
@endsection
