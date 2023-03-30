<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\dosen;
use App\Models\kategori;
use App\Models\prestasi_mhs;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empty = 0;
        $data = array(
            'kategori' => kategori::all(),
            'nama_kategori' => kategori::select('nama_kategori')->where('status_kategori', 'Aktif')->distinct()->get(),
        );
        $search = $request->search;
        $dosens = dosen::where('nama_dosen', 'LIKE', '%' . $search . '%')
            ->orWhere('jabatan_dosen', 'LIKE', '%' . $search . '%')
            ->get();

        $beritas = berita::where('judul_berita', 'LIKE', '%' . $search . '%')
            ->orWhere('penyelenggara_berita', 'LIKE', '%' . $search . '%')
            ->get();

        $prestasis = prestasi_mhs::where('nama_prestasi', 'LIKE', '%' . $search . '%')
            ->orWhere('peraih_prestasi', 'LIKE', '%' . $search . '%')
            ->get();

        return view('pages.search-data-jurusan', compact('empty', 'search', 'dosens', 'beritas', 'prestasis'))->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
