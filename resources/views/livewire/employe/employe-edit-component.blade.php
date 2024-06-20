<div>
    {{-- Container utama --}}
    <div class="container">
        {{-- Baris dengan fleksibilitas dan rata tengah --}}
        <div class="d-flex justify-content-center">
            {{-- Kartu dengan lebar 34 rem --}}
            <div class="card" style="width: 34rem;">
                {{-- Judul header kartu --}}
                <div class="card-header">
                    Edit-Employe
                </div>
                <div class="card-body">
                    {{-- Form untuk mengedit karyawan dengan metode wire:submit.prevent --}}
                    <form wire:submit.prevent="editEmploye" enctype="multipart/form-data">
                        {{-- Input file untuk mengunggah foto karyawan --}}
                        <div class="form-group">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" wire:model="img">
                            <br><br>
                            {{-- Menampilkan foto sementara jika ada, atau foto yang sudah ada --}}
                            @if ($this->img)
                            <img src="{{$img->temporaryUrl()}}" style="width: 100px;" alt="">
                            @else
                            <img src="{{ asset('assets/images/Employe')}}/{{$foto}}" style="width: 100px;" alt="">        
                            @endif
                            {{-- Menampilkan pesan error jika ada kesalahan pada input foto --}}
                            @error('foto') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        {{-- Pilihan untuk memilih user --}}
                        <div class="form-group">
                            <label for="user_id" class="form-label">User</label>
                            <select name="" class="form-control" id="" wire:model="user_id">
                                {{-- Pilihan default --}}
                                <option value="#" selected>Pilih Calon Karyawan</option>
                                {{-- Menampilkan daftar user --}}
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            {{-- Menampilkan pesan error jika ada kesalahan pada input user_id --}}
                            @error('user_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        {{-- Pilihan untuk memilih posisi --}}
                        <div class="form-group">
                            <label for="position_id" class="form-label">Position</label>
                            <select name="" class="form-control" wire:model="position_id">
                                {{-- Pilihan default --}}
                                <option value="#" selected>Pilih Posisi</option>
                                {{-- Menampilkan daftar posisi --}}
                                @foreach ($positions as $position)
                                <option value="{{$position->id}}">{{$position->nama}}</option>
                                @endforeach
                            </select>
                            {{-- Menampilkan pesan error jika ada kesalahan pada input position_id --}}
                            @error('position_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        {{-- Pilihan untuk memilih departemen --}}
                        <div class="form-group">
                            <label for="department_id" class="form-label">Department</label>
                            <select name="" class="form-control" wire:model="department_id">
                                {{-- Pilihan default --}}
                                <option value="#" selected>Pilih Department</option>
                                {{-- Menampilkan daftar departemen --}}
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->nama}}</option>
                                @endforeach
                            </select>
                            {{-- Menampilkan pesan error jika ada kesalahan pada input department_id --}}
                            @error('department_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        {{-- Input untuk nomor telepon --}}
                        <div class="form-group">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon">
                            {{-- Menampilkan pesan error jika ada kesalahan pada input telepon --}}
                            @error('telepon') <span class="error">{{$message}}</span> @enderror
                        </div>
                        {{-- Input untuk alamat --}}
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" wire:model="alamat">
                            {{-- Menampilkan pesan error jika ada kesalahan pada input alamat --}}
                            @error('alamat') <span class="error">{{$message}}</span> @enderror
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
