<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // public function sekolah()
    // {
    //     return $this->belongsTo(Sekolah::class, 'sekolah_id');
    // }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function sekolah()
    {
        return $this->hasOne(Sekolah::class, 'siswa_id');
    }

    protected $fillable = [
        'user_id','id_pendaftaran','nama_lengkap','email_akun','jenis_kelamin', 'agama','np_hp','tempat_lahir','tgl_lahir','alamat','pas_foto', 'is_registered'
    ];
}
