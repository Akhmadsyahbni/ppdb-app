@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $siswa->name }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.siswa.index') }}">Management Siswa</a></li>
                        {{-- <li class="breadcrumb-item active">{{ $sertifikat->name }} Data</li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.siswa.index') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Back">
                        <i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                            <img src="{{asset('img/pas_foto/'.$siswa->pas_foto)}}" width="100px"  alt="">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 ">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">No hp</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Alamat</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>{{ $siswa->nama_lengkap }}</td>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                    <td>{{ $siswa->agama }}</td>
                                    <td>{{ $siswa->no_hp }}</td>
                                    <td>{{ $siswa->tempat_lahir }}</td>
                                    <td>{{ $siswa->tgl_lahir }}</td>
                                    <td>{{ $siswa->alamat }}</td>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                 <h6>Data Detail Users Siswa</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
