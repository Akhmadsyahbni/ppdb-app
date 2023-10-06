@extends('layouts.dashboard')
@section('content')

<body class="hold-transition login-page" style="background-color: #E9ECEF">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{asset('assets/img/kemendikbud.png')}}" alt="" width="100px">
            <p style="font-size: 13px; font-weight:bold;">SMP Al-IKHLAS BUNTET PESANTREN</p>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                {{-- @if (session('success'))
                <div class="alert alert-success text-center">{{session('success')}}</div>
                @endif --}}
                @if (session('fail'))
                <div class="alert alert-danger text-center">{{session('fail')}}</div>
                @endif
                @if (session('info'))
                <div class="alert alert-info text-center">{{session('info')}}</div>
                @endif
                <form action="{{route('user.reset.password')}}" method="post" autocomplete="off">
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="{{$email ?? old('password')}}">
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
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    <div class="input-group mb-3">
                        <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi Password"
                            value="{{old('confirm_password')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Reset</button>
                        </div>

                    </div>
                </form>
                <p class="mb-1">
                    Sudah Punya akun?<a href="{{route('user.login')}}">Login</a>
                </p>
               
            </div>

        </div>
    </div>
    @endsection
