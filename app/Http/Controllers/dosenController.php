<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dosen = dosen::all();
        return  view('admin.dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.dosen.create', compact('dosen'));
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
        $request->validate([
            'nama_dosen' => 'required|max:255',
            'foto_dosen' => 'required|file|image|mimes:jpeg,png,jpg|max:2024',
            'gender_dosen' => 'required',
            'nip_nik_dosen' => 'required',
            'nidn_dosen' => 'required',
            'jabatan_dosen' => 'required',
            'email_dosen' => 'required',
            'notelp_dosen' => 'required',
            'alamat_dosen' => 'required'
        ]);

        // Upload Gambar Start
        $foto_dosen = $request->file('foto_dosen');

        $filenamewithextension  = $request->file('foto_dosen')->getClientOriginalName();
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $date                   = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y');
        $new_foto             = Str::slug($filename, '-', $date) . '.' . $foto_dosen->getClientOriginalExtension();
        $destinationPath        = 'images/dosen';
        $foto_dosen->storeAs($destinationPath, $new_foto);
        // upload gambar end

        $data_dosen = [
            'nama_dosen' => $request->nama_dosen,
            'foto_dosen'        => 'images/dosen/' . $new_foto,
            'gender_dosen' => $request->gender_dosen,
            'nip_nik_dosen' => $request->nip_nik_dosen,
            'nidn_dosen' => $request->nidn_dosen,
            'jabatan_dosen' => $request->jabatan_dosen,
            'email_dosen' => $request->email_dosen,
            'notelp_dosen' => $request->notelp_dosen,
            'alamat_dosen' => $request->alamat_dosen
        ];

        dosen::create($data_dosen);

        return redirect()->route('dosen.index')->with('success', 'Profile user berhasil di tambahkan');
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
