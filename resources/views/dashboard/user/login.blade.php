@extends('layouts.dashboard')
@section('content')

<body class="hold-transition login-page" style="background-color: #E9ECEF">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{asset('assets/img/kemendikbud.png')}}" alt="" width="100px">
            <p style="font-size: 13px; font-weight:bold;">SDN PEKIRINGAN KOTA CIREBON</p>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                @if (session('success'))
                <div class="alert alert-success text-center">{{session('success')}}</div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger text-center">{{session('error')}}</div>
                @endif
                @if (session('info'))
                <div class="alert alert-info text-center">{{session('info')}}</div>
                @endif
                <form action="{{route('user.check')}}" method="post" autocomplete="off">
                    @csrf
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="{{old('email')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password"
                            value="{{old('password')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>
                </form>
                <p class="mb-1">
                    <a href="">Lupa Password ?</a>
                </p>
               
                @if (Route::has('user.register'))
                <p class="mb-0">
                    Belum Punya Akun ? <a class="text-center" href="{{ route('user.register') }}">Daftar Akun</a>
                </p>
                @endif
            
            </div>

        </div>
    </div>
    @endsection
