@extends('layouts.dashboard')

@section('css')
<link rel="stylesheet"
    href="{{ asset('vendors/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Siswa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Status Pendaftaran</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                {{-- <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">Belum Lengkap</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                </p> --}}
                                @if (Auth::user() && Auth::user()->siswa)
                                    @if (Auth::user()->siswa->is_registered === 1)
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">Lengkap</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <div class="alert alert-success">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </p>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Status Pendaftaran</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                {{-- <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">Belum Lengkap</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                </p> --}}
                                @if (Auth::user() && Auth::user()->siswa)
                                    @if (Auth::user()->siswa->is_registered === 1)
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">Lengkap</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <div class="alert alert-success">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </p>
                                    @endif
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Pengumuman</h3>
                            </div>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="{{ asset('vendors/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
</script>
@endsection
