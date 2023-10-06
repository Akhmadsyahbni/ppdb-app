@extends('layouts.dashboard')
@section('content')
<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <img src="{{asset('assets/img/kemendikbud.png')}}" alt="" width="100px">
        <p style="font-size: 13px; font-weight:bold;">SMP Al-IKHLAS BUNTET PESANTREN</p>
      </div>
    
      <div class="card">
        <div class="card-body register-card-body">
          @if (session('success'))
          <div class="alert alert-success text-center">{{session('success')}}</div>
          @endif
          @if (session('fail'))
          <div class="alert alert-danger text-center">{{session('fail')}}</div>
          @endif
          <form action="{{route('user.create')}}" method="post" autocomplete="off">
            @csrf
            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    <div class="input-group mb-3">
                        <input type="name" name="name" class="form-control" placeholder="Nama" value="{{old('name')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('cpassword'){{$message}}@enderror</span>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="cpassword" placeholder="Konfrimasi Password" value="{{old('cpassword')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        
                    </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                  <label for="agreeTerms">
                   I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
              </div>
              <!-- /.col -->
            </div>
            <div class="social-auth-links text-center mb-3">
              <p>- Atau login dengan akun google -</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-google mr-2"></i>Login Google
              </a>
            </div>
          </form>
            @if (Route::has('user.login'))       
            Sudah Punya Akun ? <a class="text-center" href="{{ route('user.login') }}">Login</a>
            @endif       
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    </body>
@endsection