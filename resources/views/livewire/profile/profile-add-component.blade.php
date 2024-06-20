<div>
    <div class="container">
        <!-- Bagian untuk menempatkan konten di tengah -->
        <div class="d-flex justify-content-center">
            <!-- Kartu untuk form penambahan karyawan -->
            <div class="card" style="width: 34rem;">
                <div class="card-header">
                    Add-Employe
                </div>
                <div class="card-body">
                    <!-- Form untuk menambah karyawan baru, menggunakan Livewire untuk handling form -->
                    <form wire:submit.prevent="addEmploye" enctype="multipart/form-data">
                        <!-- Bagian untuk upload foto -->
                        <div class="form-group">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" wire:model="foto">
                            <!-- Menampilkan preview foto yang di-upload -->
                            @if ($this->foto)
                            <br>
                            <img src="{{$foto->temporaryUrl()}}" style="width: 100px" alt="">    
                            @endif
                            <!-- Menampilkan error jika ada kesalahan pada input foto -->
                            @error('foto') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        
                        <!-- Pilihan user untuk karyawan baru -->
                        <div class="form-group">
                            <label for="user_id" class="form-label">User</label>
                            <select name="" class="form-select" id="" wire:model="user_id">
                                <option value="#" selected>Plih Calon Karyawan</option>
                                <!-- Looping melalui daftar user -->
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            <!-- Menampilkan error jika ada kesalahan pada input user -->
                            @error('user_id') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <!-- Pilihan posisi untuk karyawan baru -->
                        <div class="form-group">
                            <label for="user_id" class="form-label">Position</label>
                            <select name="" id="" class="form-select" wire:model="position_id">
                                <option value="#" selected>Plih Posisi</option>
                                <!-- Looping melalui daftar posisi -->
                                @foreach ($positions as $position)
                                <option value="{{$position->id}}">{{$position->nama}}</option>
                                @endforeach
                            </select>
                            <!-- Menampilkan error jika ada kesalahan pada input posisi -->
                            @error('position_id') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <!-- Pilihan departemen untuk karyawan baru -->
                        <div class="form-group">
                            <label for="user_id" class="form-label">Department</label>
                            <select name="" class="form-select" id="" wire:model="department_id">
                                <option value="#" selected>Plih Department</option>
                                <!-- Looping melalui daftar departemen -->
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->nama}}</option>
                                @endforeach
                            </select>
                            <!-- Menampilkan error jika ada kesalahan pada input departemen -->
                            @error('department_id') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <!-- Input nomor telepon karyawan baru -->
                        <div class="form-group">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon">
                            <!-- Menampilkan error jika ada kesalahan pada input telepon -->
                            @error('telepon') <span class="error">{{$message}}</span> @enderror
                        </div>

                        <!-- Input alamat karyawan baru -->
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" wire:model="alamat">
                            <!-- Menampilkan error jika ada kesalahan pada input alamat -->
                            @error('alamat') <span class="error">{{$message}}</span> @enderror
                        </div>

                        <!-- Tombol untuk submit form -->
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
