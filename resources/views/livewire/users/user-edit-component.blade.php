<div>
    <div class="container">
        <!-- Bagian untuk menempatkan konten di tengah -->
        <div class="d-flex justify-content-center">
            <!-- Kartu untuk mengedit nama pengguna -->
            <div class="card" style="width: 38rem;">
                <div class="card-header">
                    Edit User Name
                </div>
                <div class="card-body">
                    <!-- Form untuk mengedit nama dan email pengguna -->
                    <form wire:submit.prevent="editUser" enctype="multipart/form-data">
                        <!-- Input untuk nama pengguna -->
                        <div class="form-group">
                            <label for="alamat" class="form-label">Name</label>
                            <input type="text" class="form-control" wire:model="name">
                            <!-- Menampilkan pesan error jika ada masalah dengan input name -->
                            @error('name') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <!-- Input untuk email pengguna -->
                        <div class="form-group">
                            <label for="alamat" class="form-label">Email</label>
                            <input type="text" class="form-control" wire:model="email">
                            <!-- Menampilkan pesan error jika ada masalah dengan input email -->
                            @error('email') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <br>
                        <!-- Tombol submit untuk menyimpan perubahan -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
