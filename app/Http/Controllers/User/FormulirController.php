<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Keluarga;
use App\Models\Sekolah;
use Carbon\Carbon;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function barcode($id)
    // {
       
    // }

    public function index(Request $request)
    {
        // $siswa = Siswa::find(2);
        return view('dashboard.user.riwayat_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $siswa = Siswa::find(2);
        return view('dashboard.user.form-pendaftaran',compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
            $user = Auth::user();
            $data = $request->all();
            $siswa = new Siswa;
            if (!empty($request)) {
            $siswa->user_id = $user->id;
            $id_pendaftaran = Carbon::now()->format('Ymd') . Str::random(5);
            $siswa->id_pendaftaran =  $id_pendaftaran;
            $siswa->nama_lengkap = $data['nama_lengkap'];
            $siswa->jenis_kelamin = $data['jenis_kelamin'];
            $siswa->agama = $data['agama'];
            $siswa->no_hp = $data['no_hp'];
            $siswa->tempat_lahir = $data['tempat_lahir'];
            $siswa->tgl_lahir = $data['tgl_lahir'];
            $siswa->alamat = $data['alamat'];
            if (!empty($request->hasFile('pas_foto'))) {
                $file = $request->file('pas_foto');
                $imgExtension = $file->getClientOriginalExtension();
                $imgName = $request->name . "-" . Carbon::now()->format('d-m-Y');
                // Asd-28012022
                $imgFullName = $imgName . '.' . $imgExtension;
                // Asd-28012022.png
                $imgPath = 'img/pas_foto';
                $file->move(public_path($imgPath), $imgFullName);
                $siswa->pas_foto = $imgFullName;
            }
    
            $siswa->status_pendaftaran = 'pending';
            $siswa->is_registered = true;
            // $barcode = QrCode::format('png')->generate($id_pendaftaran);
            // $siswa = Siswa::findOrFail($id_pendaftaran);
            // $siswa->barcode = $barcode;
            $save = $siswa->save();
        }
            $keluarga = new Keluarga;
            $keluarga->siswa_id = $siswa->id;
            $keluarga->anak_ke = $data['anak_ke'];
            $keluarga->status = $data['status'];
            $keluarga->nama_ayah = $data['nama_ayah'];
            $keluarga->anak_ke = $data['anak_ke'];
            $keluarga->pekerjaan_ayah = $data['pekerjaan_ayah'];
            $keluarga->nama_ibu = $data['nama_ibu'];
            $keluarga->pekerjaan_ibu = $data['pekerjaan_ibu'];
            $keluarga->agama = $data['agama'];
            $save = $keluarga->save();
    
            $sekolah = new Sekolah;
            $sekolah->siswa_id = $siswa->id;
            $sekolah->nisn = $data['nisn'];
            $sekolah->lulus_tahun = $data['lulus_tahun'];
            $sekolah->no_ijazah = $data['no_ijazah'];
            $sekolah->skhun = $data['skhun'];
            $sekolah->tahun_skhun = $data['tahun_skhun'];
            $sekolah->asal_sekolah = $data['asal_sekolah'];
            $save = $sekolah->save();
            // dd($save);
        if($save){
            return redirect()->route('user.formulir.index')->with('success', 'Berhasil Daftar');
        }else{
            return redirect()->back()->with('fail', 'Gagal Mendaftarkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $siswa = Siswa::find('id');
        // return view('dashboard.user.form-pendaftaran',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find('id');
        return view('dashboard.user.riwayat_form',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
