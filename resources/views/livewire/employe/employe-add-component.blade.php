{{-- Komentar Blade untuk menambahkan link CSS Select2 --}}
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> --}}

<div>
    <!-- Container utama -->
    <div class="container">
        <!-- Baris dengan fleksibilitas dan rata tengah -->
        <div class="d-flex justify-content-center">
            <!-- Kartu dengan lebar 34 rem -->
            <div class="card" style="width: 34rem;">
                <!-- Bagian header dari kartu -->
                <div class="card-header">
                    Add-Employee <!-- Judul header kartu -->
                </div>
                <!-- Bagian tubuh dari kartu -->
                <div class="card-body">
                    <!-- Formulir untuk pengiriman data dengan Livewire -->
                    <form wire:submit.prevent="addEmploye" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="foto" class="form-label">Foto</label>
                            <!-- Input untuk memilih file gambar dengan binding Livewire 'foto' -->
                            <input type="file" class="form-control" wire:model="foto">
                            <!-- Menampilkan pratinjau gambar jika ada -->
                            @if ($this->foto)
                            <br>
                            <img src="{{$foto->temporaryUrl()}}" style="width: 100px" alt="">    
                            @endif
                            <!-- Menampilkan pesan error jika ada kesalahan pada input 'foto' -->
                            @error('foto') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">User</label>
                            <!-- Select box untuk memilih user dengan binding Livewire 'user_id' -->
                            <select name="" class="form-select" id="nameid" wire:model="user_id">
                                <option value="#" selected>Pilih Calon Karyawan</option>
                                <!-- Looping untuk menampilkan opsi dari koleksi $users -->
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            <!-- Menampilkan pesan error jika ada kesalahan pada input 'user_id' -->
                            @error('user_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">Position</label>
                            <!-- Select box untuk memilih posisi dengan binding Livewire 'position_id' -->
                            <select name="" id="" class="form-select" wire:model="position_id">
                                <option value="#" selected>Pilih Posisi</option>
                                <!-- Looping untuk menampilkan opsi dari koleksi $positions -->
                                @foreach ($positions as $position)
                                <option value="{{$position->id}}">{{$position->nama}}</option>
                                @endforeach
                            </select>
                            <!-- Menampilkan pesan error jika ada kesalahan pada input 'position_id' -->
                            @error('position_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">Department</label>
                            <!-- Select box untuk memilih departemen dengan binding Livewire 'department_id' -->
                            <select name="" class="form-select" id="" wire:model="department_id">
                                <option value="#" selected>Pilih Department</option>
                                <!-- Looping untuk menampilkan opsi dari koleksi $departments -->
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->nama}}</option>
                                @endforeach
                            </select>
                            <!-- Menampilkan pesan error jika ada kesalahan pada input 'department_id' -->
                            @error('department_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <!-- Input untuk memasukkan nomor telepon dengan binding Livewire 'telepon' -->
                            <input type="text" class="form-control" wire:model="telepon">
                            <!-- Menampilkan pesan error jika ada kesalahan pada input 'telepon' -->
                            @error('telepon') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <!-- Input untuk memasukkan alamat dengan binding Livewire 'alamat' -->
                            <input type="text" class="form-control" wire:model="alamat">
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

{{-- Komentar Blade untuk menambahkan script Select2 --}}
{{-- <script type="text/javascript">
    // Inisialisasi Select2 pada elemen dengan id 'nameid'
    $("#nameid").select2({
        placeholder: "Select a Name",
        allowClear: true
    });
</script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> --}}
