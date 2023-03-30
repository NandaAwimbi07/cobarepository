<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arsip extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $fillable = [
        'nama_file', 'kode_file', 'jenis_file', 'tanggal_upload', 'desc_file'
    ];
    protected $table = 'arsips';
    public $timestamps = false;
    protected $guarded = [];
}
