<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rayon extends Model
{
    use HasFactory;

    protected $fillable=[
        'id','nama_siswa','angkatan','jurusan'
    ];

}
