<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = ['nama_event', 'foto_event', 'penyelenggara_event', 'desc_event',
                            'tanggal_event', 'status_event'];
    protected $table = 'events';
    public $timestamps = false;
    protected $guarded = [];
}
