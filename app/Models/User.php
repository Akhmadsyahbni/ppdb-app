<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     public function status_berkas_lengkap(){
         // Misalkan Anda memiliki kolom 'status_berkas' pada tabel users yang menunjukkan status berkas
         // Anda dapat memeriksa apakah nilainya adalah 'lengkap' atau tidak
     
         return $this->status_berkas === 'lengkap';
     }

     public function hasFilledForm(){
        return $this->is_registered;
    }

    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }
    //  public function siswa(){
    //     return $this->hasOne(Siswa::class);
    // }
    
     public function setRegistrationIdAttribute($value)
     {
        $this->attributes['id_pendaftaran'] = $value;
    }

    public function formulirpendaftaran()
    {
        return $this->hasOne(Pendaftaran::class);
    }
    
    protected $fillable = [
        'name', 'email', 'password','email_verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
}
