<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $siswa = Auth::user(); 
        if ($siswa ) {
            $siswa = $siswa->siswa;
        } if ($siswa && $siswa->is_registered === 1) {
        
        }elseif($siswa && $siswa->is_registered === 0){

        }
        return view('dashboard.user.home',compact('siswa'));
    }
    
    public function verifyStatus(){
    $siswa = Siswa::where('id', $id)->pluck('status_pendaftaran')->first();

    if ($siswa->status_pendaftaran === 'lulus') {
        $siswa = 'Selamat, Anda dinyatakan lulus!';
    } else {
        $siswa = 'Maaf, Anda tidak lulus.';
    }

    return view('dashboard.user.home', compact('siswa'));
}








    
}
