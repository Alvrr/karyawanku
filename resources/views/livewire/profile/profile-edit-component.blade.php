<div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 34rem;">
                <div class="card-header">
                    Edit-Employe
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="editEmploye" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" wire:model="img">
                            <br><br>
                            @if ($this->img)
                            <img src="{{$img->temporaryUrl()}}" style="width: 100px;" alt="">
                            @else
                            <img src="{{ asset('assets/images/Employe')}}/{{$foto}}" style="width: 100px;" alt="">        
                            @endif
                            @error('foto') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">User</label>
                            <select name="" disabled class="form-control" id="" wire:model="user_id">
                                <option value="#" selected>Plih Calon Karyawan</option>
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            
                            @error('user_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon">
                            @error('telepon') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" wire:model="alamat">
                            @error('alamat') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
