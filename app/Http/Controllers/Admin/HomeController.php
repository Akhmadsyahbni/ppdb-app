<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Keluarga;
use App\Models\Sekolah;

class HomeController extends Controller
{
    public function index(){
        $siswa = Siswa::count();
        $keluarga = Keluarga::count();
        $sekolah = Siswa::count();
        return view('dashboard.admin.home',compact('siswa','keluarga','sekolah'));
    }
}
