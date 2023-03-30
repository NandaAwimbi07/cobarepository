<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\arsip;
use App\Models\berita;
use App\Models\dosen;
use App\Models\event;
use App\Models\kategori;
use App\Models\kerjasama;
use App\Models\prestasi_mhs;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $user = User::count();
        $dosen = dosen::count();
        $event = event::count();
        $kerjasama = kerjasama::count();
        $prestasi = prestasi_mhs::count();
        $arsip = arsip::count();
        $berita = berita::count();
        $kategori = kategori::count();
        $takeuser = User::orderBy('id', 'desc')->take(3)->get();

        return view('admin.index', compact('user', 'dosen', 'event', 'kerjasama', 'prestasi', 'arsip', 'berita', 'kategori', 'takeuser'));
    }
}
