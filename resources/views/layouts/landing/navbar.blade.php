<!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <!-- <h1><a href="index.html"><span>Bootslander</span></a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <b><a href="index.html" style="color:white"><img src="assets/img/kemendikbud.png" alt="" class="img-fluid"> SDN Pekiringan</a></b>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Calon Siswa</a></li> 
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                   
                            @if (Route::has('user.login'))
                                <li class="nav-item">
                                    <a class="nav-link scrollto" href="{{ route('user.login') }}">Login Siswa</a>
                                </li>
                            @endif
                </ul>
                {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->