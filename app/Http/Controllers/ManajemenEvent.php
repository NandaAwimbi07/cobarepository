<?php

namespace App\Http\Controllers;

use File;
use App\Http\Controllers\Controller;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ManajemenEvent extends Controller
{
    public function index()
    {
        $data = [
            'event' => event::all()
        ];
        return view('admin.event.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.event')
        ];
        return view('admin.event.create', $data);
    }

    //fungsi insert
    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/event');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['foto_event' => $filename]);
        event::create($request->only(['nama_event', 'foto_event', 'penyelenggara_event', 'desc_event', 'tanggal_event', 'status_event']));
        return redirect()->route('admin.event')->with('success', 'Data Event berhasil di tambahkan');
    }

    //form edit
    public function edit($id)
    {
        $data = [
            'event'  => event::find($id),
            'action' => route('admin.update.event', $id)
        ];
        return view('admin.event.form', $data);
    }

    //fungsi update
    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,giff',
        ]);

        $data = event::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('images/event');
            if (file_exists($path . '/' . $data->foto_buku)) {
                File::delete($path . '/' . $data->foto_buku);
            }

            $file = $request->file('file');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['foto_event' => $filename]);
        event::where('id', $request->id)->update($request->only(['nama_event', 'foto_event', 'penyelenggara_event', 'desc_event', 'tanggal_event', 'status_event']));
        return redirect()->route('admin.event')->with('success', 'Data event berhasil di update');
    }

    public function destroy($id)
    {
        $data = event::findOrFail($id);

        if (file_exists(public_path('images/event' . $data->foto_event))) {
            File::delete(public_path('images/event' . $data->foto_event));
        }
        $data->delete();
        return redirect()->route('admin.event')->with('success', 'Data Event berhasil di Hapus');
    }
}
