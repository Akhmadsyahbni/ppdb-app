@extends('layouts.dashboard')

@section('content')
    <div class="content-wrapper">
        <!--Header & Breadcrumb content -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.siswa.index') }}">Management
                                    User Siswa</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <form method="POST" action="{{ route('admin.siswa.update', $siswas = $siswa->id) }}"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="card-header">
                            <h3 class="card-title">Edit Data Siswa</h3>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-lg-3">
                                    <label for="name">Nama Lengkap</label>
                                    <input id="name" name="nama_lengkap" type="text" class="form-control"
                                        value="{{$siswa->id_pendaftaran}}">
                                </div>
                               <div class="col-lg-3">
                                <label for="name">Nama Lengkap</label>
                                <input id="name" name="nama_lengkap" type="text" class="form-control"
                                    value="{{$siswa->nama_lengkap}}">
                               </div>
                               <div class="col-lg-3">
                                <label for="name">Jenis Kelamin</label>
                                <select id="name" name="jenis_kelamin" type="text" class="form-control">
                                    <option value="Laki-Laki">{{$siswa->jenis_kelamin}}</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                               </div>
                               <div class="col-lg-3">
                                <label for="name">Agama</label>
                                <select id="name" name="agama" type="text" class="form-control">
                                    <option value="islam">{{$siswa->agama}}</option>
                                    <option value="kristen">kristen</option>
                                    <option value="budha">budha</option>
                                    <option value="hindu">hindu</option>
                                    <option value="katolik">katolik</option>
                                </select>
                               </div>
                             </div>
                             <div class="row form-group">
                                <div class="col-lg-3">
                                 <label for="name">No Hp</label>
                                 <input id="name" name="no_hp" type="text" class="form-control"
                                     value="{{$siswa->no_hp}}">
                                </div>
                                <div class="col-lg-3">
                                 <label for="name">Tempat Lahir</label>
                                 <input id="name" name="tempat_lahir" type="text" class="form-control"
                                     value="{{$siswa->tempat_lahir}}">
                                </div>
                                <div class="col-lg-3">
                                 <label for="name">Tanggal</label>
                                 <input id="name" name="tgl_lahir" type="date" class="form-control"
                                     value="{{$siswa->tgl_lahir}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-3">
                                 <label for="name">Alamat</label>
                                 <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control">{{$siswa->alamat}}</textarea>
                                </div>
                                <div class="col-lg-3">
                                    <label for="image">Pas foto</label>
                                    <input id="image" name="pas_foto" type="file" class="form-control form-control-file"
                                        accept="pas_foto/*">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <img src="{{ asset('img/pas_foto/' .$siswa->pas_foto) }}" alt="" width="150px">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top"
                                        title="Save Data"><i
                                            class="fas fa-save"></i>&nbsp;&nbsp;Update</button>
                                    <a href="" class="btn btn-warning"
                                        data-toggle="tooltip" data-placement="top" title="Cancel">
                                        <i class="fas fa-undo"></i>&nbsp;&nbsp;Kembali
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
