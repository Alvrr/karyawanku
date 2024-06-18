<div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 38rem;">
                <div class="card-header">
                    Edit User Name
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="editUser" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="alamat" class="form-label">Name</label>
                            <input type="text" class="form-control" wire:model="name">
                            @error('name') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Email</label>
                            <input type="text" class="form-control" wire:model="email">
                            @error('email') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
