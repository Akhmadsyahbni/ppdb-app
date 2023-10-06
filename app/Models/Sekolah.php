<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    protected $fillable = [
        'siswa_id','nisn', 'lulusan_tahun', 'no_ijazah','tahun_skhun','asal_sekolah',
    ];
}
