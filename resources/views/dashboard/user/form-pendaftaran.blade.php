@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Formulir Pendaftaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Formulir Pendaftaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
             @if (auth()->user()->siswa)
                <div class="alert alert-warning">
                    Anda sudah mendaftar sebelumnya.
                </div>
            @else
            <div class="card">
                <form action="{{route('user.formulir.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Biodata Siswa</h3>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <input id="id" name="id" type="hidden" class="form-control"
                                    placeholder="Nama Lengkap">
                               <div class="col-lg-4">
                                <label for="name">Nama Lengkap</label>
                                <input id="name" name="nama_lengkap" type="text" class="form-control"
                                    placeholder="Nama Lengkap">
                               </div>
                               <div class="col-lg-4">
                                <label for="name">Jenis Kelamin</label>
                                <select id="name" name="jenis_kelamin" type="text" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                               </div>
                             </div>
                             <div class="row form-group">
                                <div class="col-lg-4">
                                 <label for="name">No Hp</label>
                                 <input id="name" name="no_hp" type="text" class="form-control"
                                     placeholder="No Hp">
                                </div>
                                <div class="col-lg-4">
                                 <label for="name">Tempat Lahir</label>
                                 <input id="name" name="tempat_lahir" type="text" class="form-control"
                                     placeholder="Tempat Lahir">
                                </div>
                                <div class="col-lg-4">
                                 <label for="name">Tanggal</label>
                                 <input id="name" name="tgl_lahir" type="date" class="form-control"
                                     placeholder="Tanggal">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                 <label for="name">Alamat</label>
                                 <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control">Alamat</textarea>
                                </div>
                                <div class="col-lg-4">
                                    <label for="name">Agama</label>
                                    <select id="name" name="agama" type="text" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <option value="islam">islam</option>
                                        <option value="kristen">kristen</option>
                                        <option value="budha">budha</option>
                                        <option value="hindu">hindu</option>
                                        <option value="katolik">katolik</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="image">Pas Foto:</label>
                                    <input id="image" name="pas_foto" type="file" class="form-control form-control-file" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title">Data Keluarga</h3>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                               <div class="col-lg-3">
                                <label for="name">Anak ke </label>
                                <input id="name" name="anak_ke" type="text" class="form-control"
                                    placeholder="Anak Ke">
                               </div>
                               <div class="col-lg-3">
                                <label for="name">Status dalam keluarga</label>
                                <input id="name" name="status" type="text" class="form-control"
                                    placeholder="Status">
                               </div>
                               <div class="col-lg-3">
                                <label for="name">nama Ayah</label>
                                <input id="name" name="nama_ayah" type="text" class="form-control"
                                    placeholder="nama Ayah">
                               </div>
                               <div class="col-lg-3">
                                <label for="name">Pekerjaan Ayah</label>
                                <input id="name" name="pekerjaan_ayah" type="text" class="form-control"
                                    placeholder="Pekerjaan Ayah">
                               </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-3">
                                 <label for="name">Nama Ibu</label>
                                 <input id="name" name="nama_ibu" type="text" class="form-control"
                                     placeholder="Nama Ibu">
                                </div>
                                <div class="col-lg-3">
                                    <label for="name">Pekerjaan Ibu </label>
                                    <input id="name" name="pekerjaan_ibu" type="text" class="form-control"
                                        placeholder="Pekerjaan Ibu">
                                </div>
                                <div class="col-lg-3">
                                    <label for="name">Agama </label>
                                    <input id="name" name="agama" type="text" class="form-control"
                                        placeholder="Agama">
                                </div>
                             </div>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title">Data Berkas Sekolah</h3>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                               <div class="col-lg-4">
                                <label for="name">Nisn </label>
                                <input id="name" name="nisn" type="text" class="form-control"
                                    placeholder="Nisn">
                               </div>
                               <div class="col-lg-4">
                                <label for="name">Lulus tahun</label>
                                <input id="name" name="lulus_tahun" type="text" class="form-control"
                                    placeholder="Lulus tahun">
                               </div>
                               <div class="col-lg-4">
                                <label for="name">No Ijazah</label>
                                <input id="name" name="no_ijazah" type="text" class="form-control"
                                    placeholder="Agama">
                               </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                 <label for="name">SKHUN </label>
                                 <input id="name" name="skhun" type="text" class="form-control"
                                     placeholder="Skhun">
                                </div>
                                <div class="col-lg-4">
                                 <label for="name">Tahun SKHUN</label>
                                 <input id="name" name="tahun_skhun" type="text" class="form-control"
                                     placeholder="Jenis Kelamin">
                                </div>
                                <div class="col-lg-4">
                                 <label for="name">Asal Sekolah</label>
                                 <input id="name" name="asal_sekolah" type="text" class="form-control"
                                     placeholder="Agama">
                                </div>
                             </div>
                        </div>
                        {{-- <div class="card-header">
                            <h3 class="card-title">Peminatan</h3>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-lg-6">
                                 <label for="name">Jenis Pendaftaran </label>
                                 <input id="name" name="jenis" type="text" class="form-control"
                                     placeholder="Nama Lengkap">
                                </div>
                                <div class="col-lg-6">
                                 <label for="name">jalur pendaftaran</label>
                                 <input id="name" name="jalur" type="text" class="form-control"
                                     placeholder="Jenis Kelamin">
                                </div>
                             </div>
                        </div> --}}
                        <div class="card-footer">
                            <div class="float-right">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                        title="Create New Data"><i class="fas fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                    <a href="" class="btn btn-warning" data-toggle="tooltip"
                                        data-placement="top" title="batal">
                                        <i class="fas fa-undo"></i>&nbsp;&nbsp;Batal
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
