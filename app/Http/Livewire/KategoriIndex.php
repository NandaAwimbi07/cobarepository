<?php

namespace App\Http\Livewire;

use App\Models\berita;
use App\Models\kategori;
use Livewire\Component;

class KategoriIndex extends Component
{
    public $byCategories;

    public function render()
    {
        $data = array(
            'kategori' => kategori::orderBy('nama_kategori', 'asc')->get(),
            'nama_kategori' => kategori::where('status_kategori', 'Aktif')->distinct()->orderBy('nama_kategori', 'asc')->get(),
        );

        $query = berita::query();
        $this->dataBerita = berita::orderBy('kategori_berita', 'asc')->get();

        $query->when($this->byCategories != "", function ($q) {
            return $q->where('kategori_berita', $this->byCategories);
        });

        $berita = $query->orderBy('kategori_berita', 'asc')->get();
        return view('livewire.kategori-index', compact('berita'))->with('data', $data);
    }
}
