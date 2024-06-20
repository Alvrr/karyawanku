<style>
/* Gaya CSS dapat ditambahkan di sini jika diperlukan */
</style>
<div class="container">    
    <!-- Bagian untuk menempatkan konten di tengah -->
    <div class="d-flex justify-content-center">
        <!-- Kartu untuk detail karyawan -->
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail
            </div>
            <div class="card-body">
                <!-- Menampilkan foto karyawan -->
                <div class="form-group">
                    <label for="foto" class="form-label">Foto</label>
                    <img src="{{ asset('assets/images/Employe')}}/{{$employe->foto}}" style="width: 100px;">
                </div>
                <!-- Menampilkan nama user karyawan -->
                <div class="form-group">
                    <label for="user_id" class="form-label">User</label>
                    <input type="text" disabled class="form-control" placeholder="{{$employe->user->name}}">                       
                </div>
                <!-- Menampilkan posisi karyawan -->
                <div class="form-group">
                    <label for="user_id" class="form-label">Position</label>
                    <input type="text" disabled class="form-control" placeholder="{{$employe->position->nama}}">
                </div>
                <!-- Menampilkan departemen karyawan -->
                <div class="form-group">
                    <label for="user_id" class="form-label">Department</label>
                    <input type="text" disabled class="form-control" placeholder="{{$employe->department->nama}}">
                </div>
                <!-- Menampilkan nomor telepon karyawan -->
                <div class="form-group">
                    <label for="telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" disabled class="form-control" placeholder="{{$employe->telepon}}">
                </div>
                <!-- Menampilkan alamat karyawan -->
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" disabled class="form-control" placeholder="{{$employe->alamat}}">
                </div>                    
            </div>
        </div>
    </div>
</div>
