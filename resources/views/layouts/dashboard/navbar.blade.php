<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
          <img src="{{asset('assets/img/kemendikbud.png')}}" alt="kemindikbud" width="40px">
        </li>
        <span class="nav-link" style="font-size: 13px; font-weight:bold;">SMP Al-IKHLAS BUNTET PESANTREN</span>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('assets/img/' . Auth::user()->image) }}" class="user-image img-circle elevation-2 alt="User Image">
              <span class="hidden-xs">{{Auth::user()->email}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <!-- User image -->
              <li class="user-header bg-primary">
                {{-- <img src="{{asset('assets/img/user2.png')}}" class="img-circle elevation-2" alt="User Image"> --}}
        
                <p>
                    {{Auth::user()->email}}
                  <small>Selamat datang</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-6 text-center">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="col-6 text-center">
                    @if (auth()->guard('web')->check())
                    <a href="{{route('user.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"  class="btn btn-default btn-flat">Log out</a>
                    <form id="logout-form" action="{{route('user.logout')}}" method="POST" style="display: none">
                      @csrf
                    </form>
                    @endif
                    @if (auth()->guard('admin')->check())
                    <a href="{{route('admin.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"  class="btn btn-default btn-flat">Log out</a>
                    <form id="logout-form" action="{{route('admin.logout')}}" method="POST" style="display: none">
                      @csrf
                    </form>
                    @endif
                   </div>
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>

            {{-- <a class="nav-link" data-toggle="dropdown" href="#" id="navbarDropdownUserMenu" aria-haspopup="true" aria-expanded="false">
                 {{Auth::user()->email}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" aria-labelledby="navbarDropdownUserMenu">
                <a class="dropdown-item" href="{{route('user.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{__('logout')}}<span class="float-right"><i class="fas fa-sign-out-alt"></i></span>
                </a>

                <form id="logout-form" action="{{route('user.logout')}}" method="POST" style="display: none">
                    @csrf
                </form>
            </div> --}}

    </ul>
</nav>
<!-- /.navbar -->
