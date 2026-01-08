@extends('user.layout.master')

@section('pages_name')
Pendaftaran Pengunjung
@endsection

@section('content')
<div class="container-fluid berita overflow-hidden py-5">
    <div class="container py-5">
        <div class="row g-5 mb-5">
                    <div class="col-lg-12 wow fadeInRight" data-wow-delay="0.3">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Form Pengunjung</h5>
                        </div>
                        <p class="mb-3">Isi Data Anda Dengan Benar.</p>
                        <form>
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nik" placeholder="NIK">
                                        <label for="nik">NIK (Sesuai KTP)</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="gender">
                                            <option selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                        <label for="gender">Jenis Kelamin</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="relation">
                                            <option selected disabled>Pilih Hubungan</option>
                                            <option value="Ayah/Ibu">Ayah/Ibu</option>
                                            <option value="Paman/Bibi">Paman/Bibi</option>
                                            <option value="Mertua">Mertua</option>
                                            <option value="Anak">Anak</option>
                                            <option value="Kakak/Adik">Kakak/Adik</option>
                                            <option value="Suami/Istri">Suami/Istri</option>
                                            <option value="Teman">Teman</option>
                                        </select>
                                        <label for="relation">Relasi / Hubungan</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="whatsapp" placeholder="No. Whatsapp">
                                        <label for="whatsapp">No. Whatsapp (Aktif)</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Alamat Lengkap" id="address" style="height: 100px"></textarea>
                                        <label for="address">Alamat Sesuai KTP</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="items" placeholder="Barang/Makanan yang dibawa">
                                        <label for="items">Barang / Makanan Yang Dibawa</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold mb-2">Jumlah Pengikut:</label>
                                    <div class="row g-2">
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="male_count" placeholder="Laki-laki" min="0">
                                                <label for="male_count">Laki-laki</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="female_count" placeholder="Perempuan" min="0">
                                                <label for="female_count">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="children_count" placeholder="Anak" min="0">
                                                <label for="children_count">Anak-anak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-3">Daftar Pengunjung</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
</div>
@endsection