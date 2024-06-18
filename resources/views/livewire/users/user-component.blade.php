<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    all-User Account
                </div>
                <div class="card-body">
                    <table class="table" id="data-user-all">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->email}}</td>
                                {{-- <td>
                                    <a href="{{ route('position.edit',['position_id'=>$position->id])}}" class="btn btn-secondary">Edit</a>
                                    <a href="#" wire:click.prevent="deleteposition({{$position->id}})">Delete</a>
                                </td> --}}
                            </tr>   
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     new DataTable('#data-user-all', {
            order: [['2', 'desc']]
        });
</script>
