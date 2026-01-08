@extends('user.layout.master')

@section('pages_name')
Pendaftaran Pengunjung
@endsection

@section('content')
<div class="container-fluid berita overflow-hidden py-5">
    <div class="container py-5">
        <div class="row g-5 mb-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3">
                <div class="sub-style">
                    <h5 class="sub-title text-primary pe-3">Cari Nama WBP</h5>
                </div>
                <p class="mb-3">Pastikan Jadwal Kunjungan Sesuai Dengan Jadwal Jenguk WBP Anda</p>
                    <form>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama" placeholder="">
                                        <label for="nama">Masukkan Nama Minimal 3 Karakter</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3">Cari WBP</button>
                            </div>
                        </div>
                    </form>
            </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Daftar Nama WBP</h5>
                        </div>
                        <p class="mb-5">Data yang Tampil Hanya Data WBP yang Dapat Dikunjungi Esok Hari. Silahkan Pilih </p>
                        <div class="d-flex border-bottom mb-4 pb-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama WBP</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td><a href="/form-pengunjung" class="btn btn-primary">Pilih</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td><a href="/form-pengunjung" class="btn btn-primary">Pilih</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mark</td>
                                        <td><a href="/form-pengunjung" class="btn btn-primary">Pilih</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jacob</td>
                                        <td><a href="/form-pengunjung" class="btn btn-primary">Pilih</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection