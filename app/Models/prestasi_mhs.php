<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi_mhs extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = ['nama_prestasi', 'foto_prestasi', 'peraih_prestasi', 'tahun_prestasi', 'desc_prestasi'];
    protected $table = 'prestasi_mhs';
    public $timestamps = false;
    protected $guarded = [];
}
