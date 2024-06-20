@extends('layout.layout-login')

@section('content')
<style>
    body {
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
                Add User <!-- Header bagian atas form -->
            </div>
            <div class="card-body">
                <form action="{{ route('aksireg')}}" method="post"> <!-- Form untuk menambahkan pengguna, mengarahkan ke route 'aksireg' dengan method POST -->
                    @csrf <!-- Token CSRF Laravel untuk keamanan form -->
                    <div class="form-group">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control">
                        @error('name') <!-- Menampilkan pesan kesalahan validasi jika ada -->
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                        @error('email') <!-- Menampilkan pesan kesalahan validasi jika ada -->
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password') <!-- Menampilkan pesan kesalahan validasi jika ada -->
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-select">
                            <option value="#" selected>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="normal_user">User</option>
                        </select>
                        @error('role') <!-- Menampilkan pesan kesalahan validasi jika ada -->
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Add</button> <!-- Tombol untuk menambahkan pengguna -->
                    <a href="{{ route('dashboard.all') }}" class="btn btn-primary">Go Back</a> <!-- Tautan kembali ke halaman dashboard -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
