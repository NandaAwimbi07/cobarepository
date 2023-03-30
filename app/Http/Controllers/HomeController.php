<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\prestasi_mhs;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataEvent = event::all()->take(5)->sortByDesc('tanggal_event');
        $dataPrestasi = prestasi_mhs::all();
        return view('home', compact('dataEvent', 'dataPrestasi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $berita
     * @return \Illuminate\Http\Response
     */
    public function showpengumuman($slug_pengumuman)
    {
        //
    }

    public function testimoni()
    {
        //
    }

    public function fasilitas()
    {
        return view('pages.fasilitas');
    }
}
