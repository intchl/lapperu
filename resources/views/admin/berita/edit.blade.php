@extends('admin.layout.master')

@section('title', 'Edit Berita')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mb-3">
            <h5>Edit Berita</h5>
            <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
        </div>

        <div class="card">
            <div class="card-body">

                <form action="{{ route('berita.update', $berita->id) }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Judul</label>
                        <input type="text" name="judul"
                               class="form-control"
                               value="{{ old('judul', $berita->judul) }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal"
                               class="form-control"
                               value="{{ old('tanggal', $berita->tanggal) }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Foto</label><br>
                        @if ($berita->foto)
                            <img src="{{ asset('images/berita/'.$berita->foto) }}"
                                 width="120" class="mb-2">
                        @endif
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Isi</label>
                        <textarea name="isi" rows="6"
                                  class="form-control" required>{{ old('isi', $berita->isi) }}</textarea>
                    </div>

                    <button class="btn btn-warning text-white">
                        Update Berita
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
