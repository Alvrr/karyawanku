{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> --}}
<div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 34rem;">
                <div class="card-header">
                    Add-Employee
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addEmploye" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" wire:model="foto">
                            @if ($this->foto)
                            <br>
                            <img src="{{$foto->temporaryUrl()}}" style="width: 100px" alt="">    
                            @endif
                            @error('foto') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">User</label>
                            <select name="" class="form-select" id="nameid" wire:model="user_id">
                                <option value="#" selected>Plih Calon Karyawan</option>
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            
                            @error('user_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">Position</label>
                            <select name="" id="" class="form-select" wire:model="position_id">
                                <option value="#" selected>Plih Posisi</option>
                                @foreach ($positions as $position)
                                <option value="{{$position->id}}">{{$position->nama}}</option>
                                @endforeach
                            </select>
                            @error('position_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">Department</label>
                            <select name="" class="form-select" id="" wire:model="department_id">
                                <option value="#" selected>Plih Department</option>
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->nama}}</option>
                                 @endforeach
                            </select>
                            
                            @error('department_id') <span class="error">{{ $message }}</span> @enderror

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
{{-- <script type="text/javascript">

    $("#nameid").select2({
          placeholder: "Select a Name",
          allowClear: true
      });

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</script> --}}
