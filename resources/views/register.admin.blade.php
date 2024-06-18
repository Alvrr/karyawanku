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
                Add User
            </div>
            <div class="card-body">
                <form action="{{ route('aksireg')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control">
                        @error('name')
                            <span class="error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                        @error('email')
                            <span class="error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                            <span class="error">{{$message}}</span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Role</label>
                        <select name="role" class="form-select" id="">
                            <option value="#" selected>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="normal_user">User</option>
                        </select>
                        @error('role')
                            <span class="error">{{$message}}</span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="{{ route('dashboard.all')}}" class="btn btn-primary">Go Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
