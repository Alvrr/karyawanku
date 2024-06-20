<div>
    <!-- Kontainer utama untuk seluruh isi halaman -->
    <div class="container">
        <!-- Div dengan kelas flex dan justify-content-center untuk mengatur elemen secara horisontal dan rata tengah -->
        <div class="d-flex justify-content-center">
            <!-- Kartu dengan lebar 34 rem -->
            <div class="card" style="width: 34rem;">
                <!-- Bagian header dari kartu -->
                <div class="card-header">
                    Add-Employe <!-- Teks di header kartu -->
                </div>
                <!-- Bagian tubuh dari kartu -->
                <div class="card-body">
                    <!-- Formulir yang menggunakan Livewire untuk penanganan pengiriman form secara preventif -->
                    <form wire:submit.prevent="addDepartment" enctype="multipart/form-data">
                        <!-- Grup form untuk mengisi kategori department -->
                        <div class="form-group">
                            <label for="alamat" class="form-label">Isi Kategori Department</label>
                            <!-- Input teks dengan binding Livewire untuk model 'nama' -->
                            <input type="text" class="form-control" wire:model="nama">
                            <!-- Menampilkan pesan error jika ada kesalahan pada input 'nama' -->
                            @error('nama') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <br>
                        <!-- Tombol untuk submit form -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
