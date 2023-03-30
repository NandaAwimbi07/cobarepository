<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerjasama extends Model
{
    use HasFactory;
    protected $primarykey ='id';
    protected $fillable = ['nama_program', 'nama_mitra', 'tahun_kerjasama', 'desc_kerjasama'];
    protected $table = 'kerjasamas';
    public $timestamps = false;
    protected $guarded = [];
}


