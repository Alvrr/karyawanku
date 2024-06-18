<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="card position" style="width: 60rem;">
            <div class="card-header">
                Profile
                <br><br>
            </div>
            <div class="card-body">
                {{-- <a href="{{ route('employe.add')}}" class="btn btn-secondary fa fa-plus-circle"> Add</a> --}}
                <br><br>
                @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table" id="">
                    <thead>
                        <tr>
                            <th>FOTO</th>
                            <th>USER</th>
                            <th>POSITION</th>
                            <th>DEPARTMENT</th>
                            <th>TELEPON</th>
                            <th>ALAMAT</th>
                            <th>ACTION</th>             
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employes as $employe)
                        <tr class="">
                            <td><img src="{{ asset('assets/images/Employe')}}/{{$employe->foto}}" style="width: 100px" alt=""></td>
                            <td>{{$employe->user->name ?? ''}}</td>
                            <td>{{$employe->position->nama ?? ''}}</td>
                            <td>{{$employe->department->nama ?? ''}}</td>
                            <td>{{$employe->telepon}}</td>
                            <td>{{$employe->alamat}}</td>
                            <td class="col-2">
                                <a href="{{ route('profile.edit',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                <a href="{{ route('profile.detail',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-calendar-o"></a>
                                <a href="#" wire:click.prevent="deleteEmploye({{$employe->id}})" class="btn btn-secondary fa fa-trash"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>                   
                </table>
            </div>
        </div>
        <br><br>
        @livewire('users.normal-user-component')
    </div>
</div>
<script>
     new DataTable('#data-all-user', {
            order: [['0', 'desc']]
        });
</script>
