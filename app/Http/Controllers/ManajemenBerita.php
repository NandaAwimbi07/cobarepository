<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\kategori;
use Illuminate\Http\Request;

class ManajemenBerita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'berita' => berita::all()
        ];
        return view('admin.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'action' => route('admin.store.berita')
        ];
        $kategori = kategori::distinct()->get();
        return view('admin.berita.create', $data)->with('kategori', $kategori);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/berita');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['foto_berita' => $filename]);
        berita::create($request->only(['kategori_berita', 'foto_berita', 'judul_berita', 'penyelenggara_berita', 'desc_berita', 'tanggal_berita', 'status_berita']));
        return redirect()->route('admin.berita')->with('success', 'Data Berita berhasil di tambahkan');
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
            'berita'  => berita::find($id),
            'action' => route('admin.update.berita', $id)
        ];
        $kategori = kategori::distinct()->get();
        return view('admin.berita.form', $data)->with('kategori', $kategori);
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
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,giff',
        ]);

        $data = berita::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('images/berita');

            $file = $request->file('file');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['foto_berita' => $filename]);
        berita::where('id', $request->id)->update($request->only(['kategori_berita', 'foto_berita', 'judul_berita', 'penyelenggara_berita', 'desc_berita', 'tanggal_berita', 'status_berita']));
        return redirect()->route('admin.berita')->with('success', 'Data Berita berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = berita::findOrFail($id);

        if (file_exists(public_path('images/berita' . $data->foto_berita))) {
            File::delete(public_path('images/berita' . $data->foto_berita));
        }
        $data->delete();
        return redirect()->route('admin.berita')->with('success', 'Data Berita berhasil di Hapus');
    }
}
