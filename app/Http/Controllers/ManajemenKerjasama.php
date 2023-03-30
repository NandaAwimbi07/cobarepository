<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kerjasama;
use Illuminate\Http\Request;

class ManajemenKerjasama extends Controller
{
    public function index()
    {
        $data = [
            'kerjasama' => kerjasama::all()
        ];
        return view('admin.kerjasama.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.kerjasama')
        ];
        return view('admin.kerjasama.create', $data);
    }

    public function store(Request $request)
    {
        kerjasama::create($request->all());
        return redirect()->route('admin.kerjasama')->with('success', 'Data Kerjasama berhasil di tambahkan');
    }

    public function edit($id)
    {
        $data = [
            'kerjasama'  => kerjasama::find($id),
            'action' => route('admin.update.kerjasama', $id)
        ];
        return view('admin.kerjasama.form', $data);
    }

    public function update(Request $request)
    {
        kerjasama::where('id', $request->id)->update($request->only(['nama_program', 'nama_mitra', 'tahun_kerjasama', 'desc_kerjasama']));
        return redirect()->route('admin.kerjasama')->with('success', 'Data Kerjasama berhasil di Update');
    }

    public function destroy($id)
    {
        kerjasama::where('id', $id)->delete();
        return redirect()->route('admin.kerjasama')->with('success', 'Data Kerjasama berhasil di Hapus');
    }
}
