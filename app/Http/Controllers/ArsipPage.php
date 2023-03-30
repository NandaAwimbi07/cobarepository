<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\arsip;
use Illuminate\Http\Request;

class ArsipPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akreditasiTrpl = arsip::all()->where('jenis_file', 'Akreditasi Prodi TRPL');
        $akreditasiTrk = arsip::all()->where('jenis_file', 'Akreditasi Prodi TRK');
        $akreditasiBd = arsip::all()->where('jenis_file', 'Akreditasi Prodi BD');
        $skMahasiswaAktif = arsip::all()->where('jenis_file', 'SK Mahasiswa Aktif');
        // return dd($akreditasiTrpl);
        return view('pages.arsip-jurusan', compact('akreditasiTrpl', 'akreditasiTrk', 'akreditasiBd', 'skMahasiswaAktif'));
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
