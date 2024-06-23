<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    protected $fillable =[
        'id_ruang',
        'id_pasien', 
        'tanggal_masuk', 
        'tanggal_keluar', 
        'status'
    ];
}
