<div>
    <div class="container">
        <!-- Bagian untuk menempatkan konten di tengah -->
        <div class="d-flex justify-content-center">
            <!-- Kartu untuk mengedit data karyawan -->
            <div class="card" style="width: 34rem;">
                <div class="card-header">
                    Edit-Employe
                </div>
                <div class="card-body">
                    <!-- Form untuk mengedit karyawan -->
                    <form wire:submit.prevent="editEmploye" enctype="multipart/form-data">
                        <!-- Bagian untuk mengunggah foto -->
                        <div class="form-group">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" wire:model="img">
                            <br><br>
                            <!-- Menampilkan foto sementara jika ada -->
                            @if ($this->img)
                            <img src="{{$img->temporaryUrl()}}" style="width: 100px;" alt="">
                            <!-- Menampilkan foto lama jika foto sementara tidak ada -->
                            @else
                            <img src="{{ asset('assets/images/Employe')}}/{{$foto}}" style="width: 100px;" alt="">        
                            @endif
                            @error('foto') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <!-- Bagian untuk memilih user -->
                        <div class="form-group">
                            <label for="user_id" class="form-label">User</label>
                            <select name="" disabled class="form-control" id="" wire:model="user_id">
                                <option value="#" selected>Pilih Calon Karyawan</option>
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            @error('user_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <!-- Bagian untuk mengisi nomor telepon -->
                        <div class="form-group">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon">
                            @error('telepon') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <!-- Bagian untuk mengisi alamat -->
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" wire:model="alamat">
                            @error('alamat') <span class="error">{{$message}}</span> @enderror
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
