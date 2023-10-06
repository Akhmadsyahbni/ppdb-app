@extends('layouts.landing')
@section('content')
<!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>SDN PEKIRINGAN <span></span></h1>
                        <h2>Kota Cirebon</h2>
                        <h2>Ayo Segara Daftarkan diri anda <br>Sebagai Peserta Didik Baru Gratiss!</h2>
                        <div class="text-center text-lg-start">
                        @guest
                            @if (Route::has('user.register'))
                                <a href="{{ route('user.register') }}" class="btn-get-started scrollto">Daftar Sekarang</a>
                            @endif
                        @endguest
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/intro_logo.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Details Section ======= -->
        <section id="about" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assets/img/details-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>VISI HIMASI UCIC.</h3>
                        <p class="fst-italic">
                            Untuk mencapai sebuah tujuan dengan visi sebagai berikut
                        </p>
                        <ul>
                            <li>1. </i> Mengembangkan potensi diri Mahasiswa Program Studi Sistem Informasi agar lebih inovatif, kreatif, dan bersinergi baik dalam bidang akademis maupun non akademis.</li>
                            <li>2. </i> Mengembangkan potensi diri Mahasiswa Program Studi Sistem Informasi agar lebih inovatif, kreatif, dan bersinergi baik dalam bidang akademis maupun non akademis.
                            </li>
                            <li>3. </i> Menjadi wadah kegiatan, penyalur aspirasi,minat, bakat, dan tempat tukar pikiran dengan asas demokrasi dan kekeluargaan.</li>
                            <li>4. </i> Dengan adanya Himpunan Mahasiswa Sistem Informasi akan menjadikan ikatan solidaritas yang kukuh bagi Mahaiswa Sistem Informasi Universitas Catur Insan Cendekia (UCIC)</li>
                        </ul>
                        <p>
                            Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Details Section -->

    
        <!-- ======= Pricing Section ======= -->
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
                                    <table id="myTable" class="table datatable table-striped table-hover table-bordered table-responsive">
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
        
        <!-- End Pricing Section -->
        

        <!-- ======= F.A.Q Section ======= -->
        {{-- <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                    cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                    molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section> --}}
        <!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>jln Dr.Cipto Mangunkusumo Pekiringan Kecamatan Kesambi Kota Cirebon</p>
                            </div>
                           
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>sdpekiringancrb@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p> 0231235789</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection