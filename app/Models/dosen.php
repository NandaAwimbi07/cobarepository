<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_dosen', 'foto_dosen', 'gender_dosen', 'nip_nik_dosen', 'nidn_dosen',
        'jabatan_dosen', 'email_dosen', 'notelp_dosen', 'alamat_dosen'
    ];
    // protected $table = 'dosens';
    public $timestamps = false;
    protected $guarded = [];

    // public function get_dosen()
    // {
    //     $query = DB::table('dosens')
    //         ->orderBy('dosen_id', 'DESC')
    //         ->get();
    //     return $query;
    // }
}
