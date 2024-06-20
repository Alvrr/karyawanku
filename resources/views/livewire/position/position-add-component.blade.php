<div>
    {{-- Container utama --}}
    <div class="container">
        {{-- Baris dengan fleksibilitas dan rata tengah --}}
        <div class="d-flex justify-content-center">
            {{-- Kartu dengan lebar 34 rem --}}
            <div class="card" style="width: 34rem;">
                {{-- Judul header kartu --}}
                <div class="card-header">
                    Add Position
                </div>
                <div class="card-body">
                    {{-- Form untuk menambahkan posisi dengan metode wire:submit.prevent --}}
                    <form wire:submit.prevent="addPosition" enctype="multipart/form-data">
                        {{-- Input untuk nama posisi --}}
                        <div class="form-group">
                            <label for="nama" class="form-label">Isi Kategori Position</label>
                            <input type="text" class="form-control" wire:model="nama">
                            {{-- Menampilkan pesan error jika ada kesalahan pada input nama --}}
                            @error('nama') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <br>
                        {{-- Tombol submit untuk mengirimkan form --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
