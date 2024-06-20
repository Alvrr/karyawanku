<div>
    {{-- Komentar Blade untuk memberi pesan --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    all-Department Category <!-- Judul di header kartu -->
                </div>
                <div class="card-body">
                    <a href="{{ route('department.add')}}" class="btn btn-secondary fa fa-plus-circle"> Add</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <table class="table" id="data-all-user">
                        <thead>
                            <tr class="text-center">
                                <th>Name</th>
                                <th>Dibuat Tanggal</th>
                                <th>Update Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department)
                            <tr class="">
                                <td>{{$department->nama}}</td>
                                <td>{{$department->created_at}}</td>
                                <td>{{$department->updated_at}}</td>
                                <td>
                                    <a href="{{ route('department.edit',['department_id'=>$department->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    <a href="#" onclick="confirmDelete({{ $department->id }})" class="btn btn-secondary fa fa-trash"></a>
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
    // Inisialisasi DataTable pada tabel dengan id 'data-all-user'
    new DataTable('#data-all-user', {
        order: [['1', 'desc']] // Mengatur urutan awal berdasarkan kolom kedua (indeks 1) secara descending
    });

    // Fungsi konfirmasi hapus dengan SweetAlert
    function confirmDelete(departmentId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('deleteDepartment', departmentId);
            }
        })
    }
</script>
