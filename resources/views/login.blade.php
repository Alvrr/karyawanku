@extends('layout.layout-login')

@section('content')
<!doctype html>
<html class="no-js" lang="en"> <!-- Versi modern HTML dengan bahasa Inggris sebagai default -->
<head>
    <!-- Metadata dan tautan gaya yang tidak terpakai telah dihapus untuk kesederhanaan -->
    <style>
        body {
            background-image: url({{ asset('background-image/bg-log.jpg') }});
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <!-- Logo login -->
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <!-- Form login -->
                <div class="card login-form">
                    <div class="title text-center">
                        <h3><b class="text-primary">The</b> Employee</h3>
                    </div>
                    <div style="margin-top: 15px;">
                        @if (Session::has('notif'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('notif') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                    <form action="{{ route('aksilogin') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            @error('email')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            @error('password')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                        <br><br>
                        <label class="pull-right">
                            <a href="{{ route('register') }}" class="text-primary">Sign Up Here!</a>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Memuat skrip eksternal untuk fungsionalitas halaman -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('e_admin/js/main.js') }}"></script>
</body>
</html>
@endsection
