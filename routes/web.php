<?php

// import file / rute controller
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\ArsipPage;
use App\Http\Controllers\BdController;
use App\Http\Controllers\BeritaPage;
use App\Http\Controllers\DosenPage;
use App\Http\Controllers\EventPage;
use App\Http\Controllers\KAController;
use App\Http\Controllers\KerjasamaPage;
use App\Http\Controllers\ManajemenArsip;
use App\Http\Controllers\ManajemenBerita;
use App\Http\Controllers\ManajemenDosen;
use App\Http\Controllers\ManajemenEvent;
use App\Http\Controllers\ManajemenKategori;
use App\Http\Controllers\ManajemenKerjasama;
use App\Http\Controllers\ManajemenPenghargaan;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\PrestasiPage;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TrkController;
use App\Http\Controllers\TrplController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rute yang telah digunakan pada halaman
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('sambutan-direktur', [PageController::class, 'sambutan_direktur'])->name('sambutan_direktur');
Route::get('sejarah-singkat', [PageController::class, 'sejarah'])->name('sejarah');
Route::get('visi-misi', [PageController::class, 'visi_misi'])->name('visi_misi');
Route::get('sasaran-kebijakan-mutu', [PageController::class, 'sasaran_kebijakan'])->name('sasaran_kebijakan');
Route::get('sistem_pendidikan', [PageController::class, 'sistem_pendidikan'])->name('sistem_pendidikan');
Route::get('peraturan-akademik', [PageController::class, 'peraturan_akademik'])->name('peraturan_akademik');
Route::get('kehidupan-kampus', [PageController::class, 'kehidupan_kampus'])->name('kehidupan_kampus');
Route::get('fasilitas', [HomeController::class, 'fasilitas'])->name('fasilitas');
Route::get('kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('pimpinan-jurusan', [PimpinanController::class, 'index'])->name('pimpinan');
Route::get('teknik-rekayasa-perangkat-lunak', [TrplController::class, 'index'])->name('jurusan_trpl');
Route::get('teknik-rekayasa-komputer', [TrkController::class, 'index'])->name('jurusan_trk');
Route::get('bisnis-digital', [BdController::class, 'index'])->name('jurusan_bd');
Route::get('kalender-akademik', [KAController::class, 'index'])->name('kalender_akademik');

// Search Data Jurusan
Route::get('/search-data-jurusan', [SearchController::class, 'index']);

// Rute untuk menampilkan data dinamis
Route::get('dosen-staf-jurusan', [DosenPage::class, 'index'])->name('dosen');
Route::get('event-jurusan', [EventPage::class, 'index'])->name('event_jurusan');
Route::get('berita-jurusan', [BeritaPage::class, 'index'])->name('berita_jurusan');
Route::get('kerjasama-jurusan', [KerjasamaPage::class, 'index'])->name('kerjasama_jurusan');
Route::get('prestasi-mahasiswa', [PrestasiPage::class, 'index'])->name('prestasi_mahasiswa');
Route::get('arsip-jurusan', [ArsipPage::class, 'index'])->name('arsip_jurusan');

// Auth rute
Auth::routes([
    'register' => true,
]);

Route::middleware(['auth', 'admin'])->group(function () {

    //Dosen
    Route::get('/index/dosen', [ManajemenDosen::class, 'index'])->name('admin.dosen');
    Route::get('/create/dosen', [ManajemenDosen::class, 'create'])->name('admin.create');
    Route::post('/store/dosen', [ManajemenDosen::class, 'store'])->name('admin.store');
    Route::get('/edit/{id}/dosen', [ManajemenDosen::class, 'edit'])->name('admin.edit');
    Route::post('/update/{id}/dosen', [ManajemenDosen::class, 'update'])->name('admin.update');
    Route::get('/destroy/{id}/dosen', [ManajemenDosen::class, 'destroy'])->name('admin.delete');

    //event
    Route::get('/index/event', [ManajemenEvent::class, 'index'])->name('admin.event');
    Route::get('/create/event', [ManajemenEvent::class, 'create'])->name('admin.create.event');
    Route::post('/store/event', [ManajemenEvent::class, 'store'])->name('admin.store.event');
    Route::get('/edit/{id}/event', [ManajemenEvent::class, 'edit'])->name('admin.edit.event');
    Route::post('/update/{id}/event', [ManajemenEvent::class, 'update'])->name('admin.update.event');
    Route::get('/destroy/{id}/event', [ManajemenEvent::class, 'destroy'])->name('admin.delete.event');

    // kategori
    Route::get('/index/kategori', [ManajemenKategori::class, 'index'])->name('admin.kategori');
    Route::get('/create/kategori', [ManajemenKategori::class, 'create'])->name('admin.create.kategori');
    Route::post('/store/kategori', [ManajemenKategori::class, 'store'])->name('admin.store.kategori');
    Route::get('/edit/{id}/kategori', [ManajemenKategori::class, 'edit'])->name('admin.edit.kategori');
    Route::post('/update/{id}/kategori', [ManajemenKategori::class, 'update'])->name('admin.update.kategori');
    Route::get('/destroy/{id}/kategori', [ManajemenKategori::class, 'destroy'])->name('admin.delete.kategori');

    // berita
    Route::get('/index/berita', [ManajemenBerita::class, 'index'])->name('admin.berita');
    Route::get('/create/berita', [ManajemenBerita::class, 'create'])->name('admin.create.berita');
    Route::post('/store/berita', [ManajemenBerita::class, 'store'])->name('admin.store.berita');
    Route::get('/edit/{id}/berita', [ManajemenBerita::class, 'edit'])->name('admin.edit.berita');
    Route::post('/update/{id}/berita', [ManajemenBerita::class, 'update'])->name('admin.update.berita');
    Route::get('/destroy/{id}/berita', [ManajemenBerita::class, 'destroy'])->name('admin.delete.berita');

    // arsip
    Route::get('/index/arsip', [ManajemenArsip::class, 'index'])->name('admin.arsip');
    Route::get('/create/arsip', [ManajemenArsip::class, 'create'])->name('admin.create.arsip');
    Route::post('/store/arsip', [ManajemenArsip::class, 'store'])->name('admin.store.arsip');
    Route::get('/edit/{id}/arsip', [ManajemenArsip::class, 'edit'])->name('admin.edit.arsip');
    Route::post('/update/{id}/arsip', [ManajemenArsip::class, 'update'])->name('admin.update.arsip');
    Route::get('/destroy/{id}/arsip', [ManajemenArsip::class, 'destroy'])->name('admin.delete.arsip');

    //kerjasama
    Route::get('/index/kerjasama', [ManajemenKerjasama::class, 'index'])->name('admin.kerjasama');
    Route::get('/create/kerjasama', [ManajemenKerjasama::class, 'create'])->name('admin.create.kerjasama');
    Route::post('/store/kerjasama', [ManajemenKerjasama::class, 'store'])->name('admin.store.kerjasama');
    Route::get('/edit/{id}/kerjasama', [ManajemenKerjasama::class, 'edit'])->name('admin.edit.kerjasama');
    Route::post('/update/{id}/kerjasama', [ManajemenKerjasama::class, 'update'])->name('admin.update.kerjasama');
    Route::get('/destroy/{id}/kerjasama', [ManajemenKerjasama::class, 'destroy'])->name('admin.delete.kerjasama');

    //Penghargaan Prestasi
    Route::get('/index/penghargaan', [ManajemenPenghargaan::class, 'index'])->name('admin.penghargaan');
    Route::get('/create/penghargaan', [ManajemenPenghargaan::class, 'create'])->name('admin.create.penghargaan');
    Route::post('/store/penghargaan', [ManajemenPenghargaan::class, 'store'])->name('admin.store.penghargaan');
    Route::get('/edit/{id}/', [ManajemenPenghargaan::class, 'edit'])->name('admin.edit.penghargaan');
    Route::post('/update/{id}/penghargaan', [ManajemenPenghargaan::class, 'update'])->name('admin.update.penghargaan');
    Route::get('/destroy/{id}/', [ManajemenPenghargaan::class, 'destroy'])->name('admin.delete.penghargaan');

    // // Profile
    Route::post('ubahfoto', [ProfileController::class, 'ubahfoto'])->name('ubahfoto');
});
