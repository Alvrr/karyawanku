<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Edit Name Or Email
                </div>
                <div class="card-body">
                    <table class="table" id="#">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{ route('users.edit',['user_id'=>$user->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                </td>
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
