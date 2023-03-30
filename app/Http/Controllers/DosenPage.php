<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dosen;
use Illuminate\Http\Request;

class DosenPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosenJurusan = dosen::all()->where('jabatan_dosen', 'Dosen');
        $kajur = dosen::all()->where('jabatan_dosen', 'Ketua Jurusan');
        $plp = dosen::all()->where('jabatan_dosen', 'PLP')->sortBy('nama_dosen');
        $admin = dosen::all()->where('jabatan_dosen', 'Admin')->sortBy('nama_dosen');
        $teknisi = dosen::all()->where('jabatan_dosen', 'Teknisi')->sortBy('nama_dosen');
        $jaringan = dosen::all()->where('jabatan_dosen', 'Admin Jaringan')->sortBy('nama_dosen');
        $kebersihan = dosen::all()->where('jabatan_dosen', 'Teknisi Kebersihan')->sortBy('nama_dosen');
        $kaprodi = dosen::select()->where('jabatan_dosen', 'LIKE', 'Kaprodi%')->get()->sortBy('nama_dosen');
        $ka = dosen::select()->where('jabatan_dosen', 'LIKE', 'KA. %')->get()->sortBy('nama_dosen');

        // return dd($ka);
        return view('pages.dosen-staf-jurusan', compact('kajur', 'dosenJurusan', 'admin', 'plp', 'jaringan', 'teknisi', 'kebersihan', 'kaprodi', 'ka'));
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
