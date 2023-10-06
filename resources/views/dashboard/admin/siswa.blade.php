@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Management User Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Management User Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    @if ($siswa->isEmpty())
                    <div class="text-center my-2"><i>Data empty.</i></div>
                    @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 20px;" class="text-center">No</th>
                                <th class="text-center">Id Pendaftaran</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">No hp</th>
                                <th class="text-center">Status</th>
                                <th style="width: 50px;" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $key => $siswas)
                            <tr>
                                <td tyle="width: 20px" class="text-center align-middle">
                                    {{ $key + $siswa->firstItem() }}</td>
                                <td class="align-middle text-center">{{ $siswas->id_pendaftaran }}</td>
                                <td class="align-middle text-center">{{ $siswas->nama_lengkap }}</td>
                                <td class="align-middle text-center">{{ $siswas->jenis_kelamin }}</td>
                                <td class="align-middle text-center">{{ $siswas->no_hp }}</td>
                                <td style="width: 50px;" class="align-middle text-center">
                                    @if ($siswas->status_pendaftaran === 'pending')
                                        <div class="btn-group">
                                            <a href="{{ route('admin.verifyStatus', ['id' => $siswas->id, 'status' => 'berhasil']) }}"
                                                class="btn btn-success" data-toggle="tooltip" data-placement="top"
                                                title="Verifikasi">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="{{ route('admin.verifyStatus', ['id' => $siswas->id, 'status' => 'ditolak']) }}"
                                                class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                                title="Tolak">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </div>
                                        @else
                                        {{ $siswas->status_pendaftaran }}
                                    @endif
                                </td>
                                <td style="width: 50px;" class="align-middle text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.siswa.show', ['siswa' => $siswas->id]) }}"
                                            class="btn btn-info" data-toggle="tooltip" data-placement="top"
                                            title="View Data">
                                            <i class="fas fa-address-card"></i>
                                        </a>
                                        <a href="{{ route('admin.siswa.edit', ['siswa' => $siswas->id]) }}"
                                            class="btn btn-success" data-toggle="tooltip" data-placement="top"
                                            title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#data{{ $siswas->id }}" data-toggle="modal" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            {{-- MODAL FOR DELETE ITEM --}}
                            <div class="modal fade" tabindex="-1" id="data{{ $siswas->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete {{ $siswas->name }} Data
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this data?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form method="POST"
                                                action="{{ route('admin.siswa.destroy', $siswas->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>&nbsp;&nbsp;Delete
                                                    {{ $siswas->name }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
                <div class="card-footer">
                    <div class="float-right mt-3">
                        {{ $siswa->links() }}
                    </div>
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
