<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function sejarah()
    {
        return view('pages.sejarah-singkat');
    }

    public function sambutan_direktur()
    {
        return view('pages.sambutan-direktur');
    }

    public function kerjasama_jurusan()
    {
        return view('pages.kerjasama-jurusan');
    }

    public function visi_misi()
    {
        return view('pages.visi-misi');
    }

    public function sistem_pendidikan()
    {
        return view('pages.sistem-pendidikan');
    }

    public function sasaran_kebijakan()
    {
        return view('pages.sasaran-kebijakan-mutu');
    }

    public function peraturan_akademik()
    {
        return view('pages.peraturan_akademik');
    }

    public function kehidupan_kampus()
    {
        return view('pages.kehidupan-kampus');
    }

    public function prestasi_mahasiswa()
    {
        return view('pages.prestasi-mahasiswa');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }
}
