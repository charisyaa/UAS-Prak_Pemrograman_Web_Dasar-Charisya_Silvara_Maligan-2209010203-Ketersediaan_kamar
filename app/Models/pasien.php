<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $fillable =[
        'namapasien',
        'umurpasien',
        'jeniskelaminpasien',
        'jenispenyakit'
    ];
}
