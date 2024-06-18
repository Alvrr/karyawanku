<style></style>
<div class="conteainer">    
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto</label>
                        <img src="{{ asset('assets/images/Employe')}}/{{$employe->foto}}" style="width: 100px;">
                    </div>
                    <div class="form-group">
                        <label for="user_id" class="form-label">User</label>
                        <input type="text" disabled class="form-control" placeholder="{{$employe->user->name}}">                       
                    </div>
                    <div class="form-group">
                        <label for="user_id" class="form-label">Position</label>
                        <input type="text" disabled class="form-control"  placeholder="{{$employe->position->nama}}">
                      
                    <div class="form-group">
                        <label for="user_id" class="form-label">Department</label>
                        <input type="text" disabled class="form-control" placeholder="{{$employe->department->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" disabled class="form-control" placeholder="{{$employe->telepon}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" disabled class="form-control" placeholder="{{$employe->alamat}}">
                    </div>                    
                </div>
            </div>
        </div>
</div>
