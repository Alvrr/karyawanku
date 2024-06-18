<div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 34rem;">
                <div class="card-header">
                    Add Position
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addPosition" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="alamat" class="form-label">Isi Kategori Position</label>
                            <input type="text" class="form-control" wire:model="nama">
                            @error('nama') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
