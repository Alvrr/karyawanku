<style>
    /* Style untuk elemen di dalam konten detail */
    .form-group {
        margin-bottom: 1rem; /* Margin bawah antar elemen form */
    }
</style>

<div class="container">    
    <!-- Container utama -->
    <div class="d-flex justify-content-center">
        <!-- Baris dengan fleksibilitas dan rata tengah -->
        <div class="card" style="width: 24rem;">
            <!-- Kartu dengan lebar 24 rem -->
            <div class="card-header">
                Detail <!-- Judul header kartu -->
            </div>
            <div class="card-body">
                <!-- Bagian tubuh dari kartu -->
                <div class="form-group">
                    <label for="foto" class="form-label">Foto</label>
                    <!-- Menampilkan foto karyawan -->
                    <img src="{{ asset('assets/images/Employe')}}/{{$employe->foto}}" style="width: 100px;">
                </div>
                <div class="form-group">
                    <label for="user_id" class="form-label">User</label>
                    <!-- Input teks untuk menampilkan nama pengguna (user) karyawan -->
                    <input type="text" disabled class="form-control" placeholder="{{$employe->user->name}}">
                </div>
                <div class="form-group">
                    <label for="user_id" class="form-label">Position</label>
                    <!-- Input teks untuk menampilkan posisi karyawan -->
                    <input type="text" disabled class="form-control" placeholder="{{$employe->position->nama}}">
                </div>
                <div class="form-group">
                    <label for="user_id" class="form-label">Department</label>
                    <!-- Input teks untuk menampilkan departemen karyawan -->
                    <input type="text" disabled class="form-control" placeholder="{{$employe->department->nama}}">
                </div>
                <div class="form-group">
                    <label for="telepon" class="form-label">Nomor Telepon</label>
                    <!-- Input teks untuk menampilkan nomor telepon karyawan -->
                    <input type="text" disabled class="form-control" placeholder="{{$employe->telepon}}">
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <!-- Input teks untuk menampilkan alamat karyawan -->
                    <input type="text" disabled class="form-control" placeholder="{{$employe->alamat}}">
                </div>                    
            </div>
        </div>
    </div>
</div>
