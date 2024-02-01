<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//delete dari rental
use Illuminate\Database\Eloquent\SoftDeletes;

class CodePelanggaran extends Model
{
    use HasFactory;

    protected $table = "code_pelanggarans";
    protected $fillable =[
        'code' , 'deskripsi'
    ];
}
