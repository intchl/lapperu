<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

// --- USER ROUTES ---
Route::get('/', function () {
    return view('user.pages.index');
});
Route::get('/profil', function () {
    return view('user.pages.profil');
});
Route::get('/struktur-organisasi', function () {
    return view('user.pages.struktur');
});
Route::get('/daftar-pengunjung', function () {
    return view('user.pages.daftar-pengunjung');
});
Route::get('/form-pengunjung', function () {
    return view('user.pages.form-pengunjung');
});

// Berita User
Route::get('/berita-kami', [BeritaController::class, 'userIndex'])->name('user.berita.index');
Route::get('/berita-detail/{id}', [BeritaController::class, 'show'])->name('berita.detail');

// --- ADMIN ROUTES ---
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');

// Admin CRUD Berita (Otomatis menghandle index, create, store, show, edit, update, destroy)
Route::resource('berita', BeritaController::class)->names([
    'index'   => 'berita.index',
    'create'  => 'berita.create',
    'store'   => 'berita.store',
    'show'    => 'berita.show',
    'edit'    => 'berita.edit',
    'update'  => 'berita.update',
    'destroy' => 'berita.destroy',
]);
