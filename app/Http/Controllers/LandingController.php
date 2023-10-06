<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class LandingController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('sekolah')->get();
        return view('landing.index', ['siswa' => $siswa]);
    }
}
