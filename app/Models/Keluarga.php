<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id','anak_ke','status','nama_ayah','pekerjaan_ayah', 'nama_ibu','pekerjaan_ibu','agama'
    ];
}
