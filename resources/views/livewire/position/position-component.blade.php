<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 60rem;">
               
                <div class="card-header">
                    all-Position
                </div>
                <div class="card-body">
                    <a href="{{route('position.add')}}" class="btn btn-secondary fa fa-plus-circle"> Add</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <table class="table" id="data-user-all">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Dibuat Tanggal</th>
                                <th>Update Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($positions as $position)
                            <tr>
                                <td>{{$position->nama}}</td>
                                <td>{{$position->created_at}}</td>
                                <td>{{$position->updated_at}}</td>
                                <td>
                                    <a href="{{ route('position.edit',['position_id'=>$position->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    <a href="#" wire:click.prevent="deletePosition({{$position->id}})" class="btn btn-secondary fa fa-trash"></a>
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
            order: [['1', 'desc']]
        });
</script>
