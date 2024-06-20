@extends('layout.layout-login')
@section('content')
<style>
     body {
        /* Mengatur gambar latar belakang */
        background-image: url({{ asset('background-image/bg-log.jpg')}});
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
}
</style>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 28rem; margin-top: 50px;">
            <div class="card-header">
                REGISTRATION
            </div>
            <div class="card-body">
                <!-- Form untuk registrasi pengguna baru -->
                <form action="{{ route('aksireg')}}" method="post">
                    <!-- Token CSRF untuk keamanan -->
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Nama</label>
                        <!-- Input untuk nama -->
                        <input type="text" name="name" class="form-control">
                        <!-- Menampilkan pesan error jika validasi nama gagal -->
                        @error('name')
                            <span class="error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Email</label>
                        <!-- Input untuk email -->
                        <input type="text" name="email" class="form-control">
                        <!-- Menampilkan pesan error jika validasi email gagal -->
                        @error('email')
                            <span class="error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Password</label>
                        <!-- Input untuk password -->
                        <input type="password" name="password" class="form-control">
                        <!-- Menampilkan pesan error jika validasi password gagal -->
                        @error('password')
                            <span class="error">{{$message}}</span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Role</label>
                        <!-- Dropdown untuk memilih role -->
                        <select name="role" class="form-select" id="">
                            <option value="#" selected>Pilih Role</option>
                            <option value="normal_user">User</option>
                        </select>
                        <!-- Menampilkan pesan error jika validasi role gagal -->
                        @error('role')
                            <span class="error">{{$message}}</span>
                        @enderror
                    </div>
                    <br>
                    <!-- Tombol untuk submit form registrasi -->
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <!-- Tombol untuk kembali ke halaman login -->
                    <a href="{{ route('login')}}" class="btn btn-primary">Go Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
