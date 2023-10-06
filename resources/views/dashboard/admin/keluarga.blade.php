@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Management keluarga Siswa</h1>
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
                    @if ($keluarga->isEmpty())
                        <div class="text-center my-2"><i>Data empty.</i></div>
                    @else
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 20px;" class="text-center">No</th>
                                    <th class="text-center">Anak Ke</th>
                                    <th class="text-center">Status Anak</th>
                                    <th class="text-center">Nama Ayah</th>
                                    <th class="text-center">Pekerjaan Ayah</th>
                                    <th class="text-center">Nama Ibu</th>
                                    <th class="text-center">Pekerjaan Ibu</th>
                                    <th class="text-center">Asal keluarga</th>
                                    <th style="width: 50px;" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keluarga as $key => $keluargas)
                                    <tr>
                                        <td tyle="width: 20px" class="text-center align-middle">
                                            {{ $key + $keluarga->firstItem() }}</td>
                                        <td class="align-middle text-center">{{ $keluargas->anak_ke }}</td>
                                        <td class="align-middle text-center">{{ $keluargas->status }}</td>
                                        <td class="align-middle text-center">{{ $keluargas->nama_ayah }}</td>
                                        <td class="align-middle text-center">{{ $keluargas->pekerjaan_ayah }}</td>
                                        <td class="align-middle text-center">{{ $keluargas->nama_ibu }}</td>
                                        <td class="align-middle text-center">{{ $keluargas->pekerjaan_ibu }}</td>
                                        <td class="align-middle text-center">{{ $keluargas->agama }}</td>
                                        <td style="width: 50px;" class="align-middle text-center">
                                            <div class="btn-group">
                                                <a href=""
                                                    class="btn btn-info" data-toggle="tooltip" data-placement="top"
                                                    title="View Data">
                                                    <i class="fas fa-address-card"></i>
                                                </a>
                                                <a href="{{ route('admin.keluarga.edit', ['keluarga' => $keluargas->id]) }}"
                                                    class="btn btn-success" data-toggle="tooltip" data-placement="top"
                                                    title="Edit Data">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="" data-toggle="modal"
                                                    class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr> 
                                    {{-- MODAL FOR DELETE ITEM --}}
                                    {{-- <div class="modal fade" tabindex="-1" id="data{{ $keluarga->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete {{ $keluarga->name }} Data
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete this data?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form method="POST"
                                                        action="{{ route('keluargas.destroy', $keluarga->id) }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>&nbsp;&nbsp;Delete
                                                            {{ $keluarga->name }}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                @endforeach
                            </tbody>
                        </table>
                     @endif 
                </div>
                <div class="card-footer">
                    <div class="float-right mt-3">
                        {{ $keluarga->links() }}
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
