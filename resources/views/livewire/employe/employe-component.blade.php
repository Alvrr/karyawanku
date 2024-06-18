<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="card position" style="width: 60rem;">
            <div class="card-header">
                All Employe
                <br><br>
            </div>
            <div class="card-body">
                @if (Auth::user()->role === 'admin')
                <a href="{{ route('employe.add')}}" class="btn btn-secondary fa fa-plus-circle"> Add</a>
                @endif
                <br><br>
                @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table" id="data-all-user">
                    <thead>
                        <tr>
                            <th>FOTO</th>
                            <th>USER</th>
                            <th>POSITION</th>
                            <th>DEPARTMENT</th>
                            <th>TELEPON</th>
                            <th>ALAMAT</th>
                            @if (Auth::user()->role === 'admin')
                            <th>ACTION</th>                               
                            @endif
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
                            @if (Auth::user()->role === 'admin')
                            <td class="col-2">
                                <a href="{{ route('employe.edit',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                <a href="{{ route('employe.detail',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-calendar-o"></a>
                                <a href="#" wire:click.prevent="deleteEmploye({{$employe->id}})" class="btn btn-secondary fa fa-trash"></a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>                   
                </table>
            </div>
        </div>
    </div>
</div>
<script>
     new DataTable('#data-all-user', {
            order: [['0', 'desc']]
        });
</script>
