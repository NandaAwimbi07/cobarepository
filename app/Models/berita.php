<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'beritas';
    protected $primarykey = 'id';
    protected $fillable = ['kategori_berita', 'judul_berita', 'foto_berita', 'penyelenggara_berita', 'desc_berita', 'tanggal_berita', 'status_berita'];
    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
