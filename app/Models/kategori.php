<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'kategoris';
    protected $primarykey = 'id';
    protected $fillable = ['nama_kategori', 'status_kategori', 'author_kategori', 'desc_kategori'];
    public $timestamps = false;

    public function berita()
    {
        return $this->hasMany(berita::class);
    }
}
