<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use Illuminate\Http\Request;

class ManajemenKategori extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'kategori' => kategori::all()
        ];
        return view('admin.kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'action' => route('admin.store.kategori')
        ];
        return view('admin.kategori.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kategori::create($request->all());
        return redirect()->route('admin.kategori')->with('success', 'Data Kategori Berita berhasil di tambahkan');
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
        $data = [
            'kategori'  => kategori::find($id),
            'action' => route('admin.update.kategori', $id)
        ];
        return view('admin.kategori.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        kategori::where('id', $request->id)->update($request->only(['nama_kategori', 'status_kategori', 'author_kategori', 'desc_kategori']));
        return redirect()->route('admin.kategori')->with('success', 'Data Kategori Berita berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori::where('id', $id)->delete();
        return redirect()->route('admin.kategori')->with('success', 'Data Kategori Berita berhasil di Hapus');
    }
}
