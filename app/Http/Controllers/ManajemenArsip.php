<?php

namespace App\Http\Controllers;

use File;
use App\Http\Controllers\Controller;
use App\Models\arsip;

use Illuminate\Http\Request;

class ManajemenArsip extends Controller
{
    public function index()
    {
        $data = [
            'arsip' => arsip::all()
        ];
        return view('admin.arsip.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.arsip')
        ];
        return view('admin.arsip.create', $data);
    }

    //fungsi insert
    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx|max:10240'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('dokumen/arsip');
            $filename = 'doc_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $request->file('file')->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['kode_file' => $filename]);
        arsip::create($request->only(['nama_file', 'kode_file', 'jenis_file', 'tanggal_upload', 'desc_file']));
        return redirect()->route('admin.arsip')->with('success', 'Arsip Dokumen berhasil di tambahkan');
    }
    //form edit
    public function edit($id)
    {
        $data = [
            'arsip'  => arsip::find($id),
            'action' => route('admin.update.arsip', $id)
        ];
        return view('admin.arsip.form', $data);
    }

    //fungsi update
    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx|max:10240',
        ]);

        $data = arsip::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('dokumen/arsip');
            if (file_exists($path . '/' . $data->kode_file)) {
                File::delete($path . '/' . $data->kode_file);
            }

            $file = $request->file('file');
            $filename = 'doc_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $request->file('file')->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['kode_file' => $filename]);
        arsip::where('id', $request->id)->update($request->only(['nama_file', 'kode_file', 'jenis_file', 'tanggal_upload', 'desc_file']));
        return redirect()->route('admin.arsip')->with('success', 'Data Arsip Dokumen berhasil di update');
    }

    public function destroy($id)
    {
        $data = arsip::findOrFail($id);

        if (file_exists(public_path('dokumen/arsip' . $data->kode_file))) {
            File::delete(public_path('dokumen/arsip' . $data->kode_file));
        }
        $data->delete();
        return redirect()->route('admin.arsip')->with('success', 'Data Arsip Dokumen berhasil di Hapus');
    }
}
