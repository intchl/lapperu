@extends('admin.layout.master')

@section('title', 'Berita')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Data Berita</h5>
            <a href="{{ route('berita.create') }}" class="btn btn-primary d-flex align-items-center gap-2">
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
                            @forelse ($berita as $item)
                                <tr>
                                    <td>
                                        <span class="text-muted">
                                            {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                        </span>
                                    </td>

                                    <td>
                                        <strong>{{ $item->judul }}</strong>
                                    </td>

                                    <td>
                                        @if ($item->foto)
                                            <img 
                                                src="{{ asset('images/berita/' . $item->foto) }}" 
                                                width="50"
                                                class="rounded shadow-sm"
                                            >
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>

                                    <td>
                                        <span class="text-truncate d-inline-block" style="max-width:150px">
                                            {{ Str::limit($item->isi, 60) }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="badge bg-light-primary text-primary">
                                            {{ $item->dilihat }} kali
                                        </span>
                                    </td>

                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('berita.show', $item->id) }}" class="btn btn-sm btn-light-info">
                                                <i class="fas fa-eye text-info"></i>
                                            </a>

                                            <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-sm btn-light-warning">
                                                <i class="fas fa-edit text-warning"></i>
                                            </a>

                                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-light-danger" onclick="return confirm('Yakin hapus berita?')">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">
                                        Data berita belum ada
                                    </td>
                                </tr>
                            @endforelse
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
