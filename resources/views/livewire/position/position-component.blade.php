<div>
    {{-- Container utama --}}
    <div class="container">
        {{-- Baris dengan fleksibilitas dan rata tengah --}}
        <div class="d-flex justify-content-center">
            {{-- Kartu dengan lebar 60 rem --}}
            <div class="card" style="width: 60rem;">
                {{-- Judul header kartu --}}
                <div class="card-header">
                    all-Position
                </div>
                <div class="card-body">
                    {{-- Tombol tambah posisi --}}
                    <a href="{{ route('position.add') }}" class="btn btn-secondary fa fa-plus-circle"> Add</a>
                    <br><br>
                    {{-- Notifikasi berhasil --}}
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('notif') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    {{-- Tabel untuk menampilkan semua posisi --}}
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
                            {{-- Looping untuk menampilkan setiap posisi --}}
                            @foreach ($positions as $position)
                            <tr>
                                <td>{{ $position->nama }}</td>
                                <td>{{ $position->created_at }}</td>
                                <td>{{ $position->updated_at }}</td>
                                <td>
                                    {{-- Tombol edit posisi --}}
                                    <a href="{{ route('position.edit',['position_id'=>$position->id]) }}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    {{-- Tombol hapus posisi --}}
                                    <a href="#" onclick="confirmDelete({{ $position->id }})" class="btn btn-secondary fa fa-trash"></a>
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
    // Inisialisasi DataTable dengan id data-user-all
    new DataTable('#data-user-all', {
        order: [['1', 'desc']] // Mengurutkan berdasarkan kolom 'Dibuat Tanggal' secara descending
    });

    // Fungsi konfirmasi hapus dengan SweetAlert
    function confirmDelete(positionId) {
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
                @this.call('deletePosition', positionId);
            }
        })
    }
</script>
