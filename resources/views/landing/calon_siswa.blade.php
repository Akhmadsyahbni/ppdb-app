<section id="pricing" class="pricing">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Calon siswa</h2>
            <p>Calon Siswa yang mendaftar</p>
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        @if ($siswa->isEmpty())
                            <div class="text-center my-2"><i>Data empty.</i></div>
                        @else
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;" class="text-center">No</th>
                                        <th class="text-center">Id Pendaftaran</th>
                                        <th class="text-center">Nama Siswa</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">No hp</th>
                                        <th class="text-center">Status Pendaftaran</th>
                                        <th class="text-center">Asal Sekolah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $key => $siswas)
                                        <tr>
                                            {{-- <td tyle="width: 20px" class="text-center align-middle">
                                                {{ $key + $siswa->firstItem() }}</td> --}}
                                            <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                            <td class="align-middle text-center">{{ $siswas->id_pendaftaran }}</td>
                                            <td class="align-middle text-center">{{ $siswas->nama_lengkap }}</td>
                                            <td class="align-middle text-center">{{ $siswas->jenis_kelamin }}</td>
                                            <td class="align-middle text-center">{{ $siswas->no_hp }}</td>
                                            <td class="align-middle text-center">{{ $siswas->status_pendaftaran }}</td>
                                            <td class="align-middle text-center">{{ $siswas->sekolah->asal_sekolah }}</td>
                                            {{-- <td style="width: 50px;" class="align-middle text-center">
                                                <div class="btn-group">
                                                    <a href=""
                                                        class="btn btn-info" data-toggle="tooltip" data-placement="top"
                                                        title="View Data">
                                                        <i class="fas fa-address-card"></i>
                                                    </a>
                                                    <a href=""
                                                        class="btn btn-success" data-toggle="tooltip" data-placement="top"
                                                        title="Edit Data">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="" data-toggle="modal"
                                                        class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td> --}}
                                        </tr> 
                                        {{-- MODAL FOR DELETE ITEM --}}
                                        {{-- <div class="modal fade" tabindex="-1" id="data{{ $sekolah->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete {{ $sekolah->name }} Data
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
                                                            action="{{ route('sekolahs.destroy', $sekolah->id) }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="fas fa-trash"></i>&nbsp;&nbsp;Delete
                                                                {{ $sekolah->name }}
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
                            {{-- {{ $siswa->links() }} --}}
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>
