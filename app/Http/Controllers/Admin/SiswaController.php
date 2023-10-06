<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Sekolah;
use Carbon\Carbon;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    
    public function index()
    {
        // $siswa = Siswa::with('sekolah')->get();
        $siswa = Siswa::paginate(5);
        
        return view('dashboard.admin.siswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('dashboard.admin.siswa_detail',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('dashboard.admin.siswa_edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        if (!empty($request->file('pas_foto'))) {
            // Delete Old File
            $oldImgPath = public_path() . '/img/pas_foto/' . $siswa->pas_foto;
            // C:/XAMPP/htdocs/laravel-pertemuan-12/public/img/portfolios/As-28-01-2022.png
            // unlink($oldImgPath);

            // Update New File
            $file = $request->file('pas_foto');
            $imgExtension = $file->getClientOriginalExtension();
            $imgName = $request->name . "-" . Carbon::now()->format('d-m-Y');
            $imgFullName = $imgName . '.' . $imgExtension;
            $imgPath = 'img/pas_foto';
            $file->move(public_path($imgPath), $imgFullName);
            $siswa->pas_foto = $imgFullName;

            // Merge Request Data
            $siswa->update([
                'nama_lengkap' => $request->nama_lengkap,
                'pas_foto' => $imgFullName,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'no_hp' => $request->no_hp,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat

            ]);
        } else {
            $siswa->update([
                'nama_lengkap' => $request->nama_lengkap,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'no_hp' => $request->no_hp,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat
            ]);
        }
        return redirect()->route('admin.siswa.index')->with('toast_success', 'Data berhasil di update');
    }

    public function verifyStatus($id, $status_pendaftaran){
        $user = Siswa::findOrFail($id);
        $user->status_pendaftaran = $status_pendaftaran;
        $user->save();
    return redirect()->back()->with('success', 'Status pendaftaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
         // Delete File
         $imgPath = public_path() . '/img/pas_foto/' . $siswa->pas_foto;
        //  unlink($imgPath);
 
         // Delete Data
         $siswa->delete();
 
         return redirect()->route('admin.siswa.index')->with('toast_success', 'Data berhasil di hapus');
    }
}
