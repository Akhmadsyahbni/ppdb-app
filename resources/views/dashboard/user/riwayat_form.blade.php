@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Riwayat Formulir Pendaftaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Riwayat Formulir Pendaftaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
