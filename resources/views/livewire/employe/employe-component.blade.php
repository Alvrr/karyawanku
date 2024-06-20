<div>
    {{-- Komentar Blade untuk memberikan kutipan --}}
    <div class="container">
        {{-- Container utama --}}
        <div class="card position" style="width: 60rem;">
            {{-- Kartu dengan lebar 60rem --}}
            <div class="card-header">
                All Employe <!-- Judul header kartu -->
                <br><br> <!-- Baris kosong untuk jarak -->
            </div>
            <div class="card-body">
                {{-- Bagian tubuh kartu --}}
                @if (Auth::user()->role === 'admin')
                {{-- Tampilkan tombol "Add" hanya jika pengguna memiliki peran admin --}}
                <a href="{{ route('employe.add')}}" class="btn btn-secondary fa fa-plus-circle"> Add</a>
                @endif
                <br><br> <!-- Baris kosong untuk jarak -->
                @if (Session::has('notif'))
                {{-- Tampilkan pesan sukses jika ada notifikasi sesi --}}
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('notif')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table" id="data-all-user">
                    {{-- Tabel untuk menampilkan data karyawan --}}
                    <thead>
                        {{-- Header tabel --}}
                        <tr>
                            <th>FOTO</th>
                            <th>USER</th>
                            <th>POSITION</th>
                            <th>DEPARTMENT</th>
                            <th>TELEPON</th>
                            <th>ALAMAT</th>
                            @if (Auth::user()->role === 'admin')
                            <th>ACTION</th>
                            {{-- Kolom tambahan untuk tindakan jika pengguna adalah admin --}}
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Isi tabel dengan data dari $employes --}}
                        @foreach ($employes as $employe)
                        <tr class="">
                            {{-- Baris data untuk setiap karyawan --}}
                            <td><img src="{{ asset('assets/images/Employe')}}/{{$employe->foto}}" style="width: 100px" alt=""></td>
                            {{-- Menampilkan foto karyawan --}}
                            <td>{{$employe->user->name ?? ''}}</td>
                            {{-- Menampilkan nama pengguna (user) karyawan --}}
                            <td>{{$employe->position->nama ?? ''}}</td>
                            {{-- Menampilkan posisi karyawan --}}
                            <td>{{$employe->department->nama ?? ''}}</td>
                            {{-- Menampilkan departemen karyawan --}}
                            <td>{{$employe->telepon}}</td>
                            {{-- Menampilkan nomor telepon karyawan --}}
                            <td>{{$employe->alamat}}</td>
                            {{-- Menampilkan alamat karyawan --}}
                            @if (Auth::user()->role === 'admin')
                            {{-- Tampilkan tindakan jika pengguna adalah admin --}}
                            <td class="col-2">
                                {{-- Tombol untuk mengedit, melihat detail, dan menghapus karyawan --}}
                                <a href="{{ route('employe.edit',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                <a href="{{ route('employe.detail',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-calendar-o"></a>
                                <a href="#" onclick="confirmDelete({{ $employe->id }})" class="btn btn-secondary fa fa-trash"></a>
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
    // Skrip untuk inisialisasi DataTable pada tabel dengan id 'data-all-user'
    new DataTable('#data-all-user', {
        order: [['0', 'desc']] // Mengatur urutan awal berdasarkan kolom pertama (indeks 0) secara descending
    });

    // Fungsi konfirmasi hapus dengan SweetAlert
    function confirmDelete(employeId) {
        Swal.fire({
            title: 'Apakah Kamu Yakin?',
            text: "Kamu tidak dapat melihatnya lagi!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('deleteEmploye', employeId);
            }
        })
    }
</script>
