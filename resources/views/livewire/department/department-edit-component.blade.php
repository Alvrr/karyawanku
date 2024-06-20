<div>
    <!-- Container utama -->
    <div class="container">
        <!-- Baris dengan fleksibilitas dan rata tengah -->
        <div class="d-flex justify-content-center">
            <!-- Kartu dengan lebar 34 rem -->
            <div class="card" style="width: 34rem;">
                <!-- Bagian header dari kartu -->
                <div class="card-header">
                    Add-Employe <!-- Judul header kartu -->
                </div>
                <!-- Bagian tubuh dari kartu -->
                <div class="card-body">
                    <!-- Formulir untuk pengiriman data dengan Livewire -->
                    <form wire:submit.prevent="editDepartment" enctype="multipart/form-data">
                        <!-- Grup form untuk mengisi kategori departemen -->
                        <div class="form-group">
                            <label for="alamat" class="form-label">Isi Kategori Department</label>
                            <!-- Input teks yang terhubung dengan model Livewire 'nama' -->
                            <input type="text" class="form-control" wire:model="nama">
                            <!-- Menampilkan pesan error jika ada kesalahan pada input 'alamat' -->
                            @error('alamat') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <br>
                        <!-- Tombol untuk mengirimkan formulir -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
