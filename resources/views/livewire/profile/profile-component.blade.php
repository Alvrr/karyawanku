<div>
    {{-- Karena dia tidak bersaing dengan siapa pun, tidak ada yang bisa bersaing dengannya. --}}
    <div class="container">
        <!-- Kartu untuk profil karyawan -->
        <div class="card position" style="width: 60rem;">
            <div class="card-header">
                Profile
                <br><br>
            </div>
            <div class="card-body">
                {{-- Tombol untuk menambahkan karyawan baru (dihilangkan) --}}
                {{-- <a href="{{ route('employe.add')}}" class="btn btn-secondary fa fa-plus-circle"> Add</a> --}}
                <br><br>
                <!-- Menampilkan notifikasi jika ada -->
                @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <!-- Tabel untuk menampilkan daftar karyawan -->
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
                        <!-- Looping melalui daftar karyawan untuk menampilkan data masing-masing -->
                        @foreach ($employes as $employe)
                        <tr class="">
                            <!-- Menampilkan foto karyawan -->
                            <td><img src="{{ asset('assets/images/Employe')}}/{{$employe->foto}}" style="width: 100px" alt=""></td>
                            <!-- Menampilkan nama user -->
                            <td>{{$employe->user->name ?? ''}}</td>
                            <!-- Menampilkan nama posisi -->
                            <td>{{$employe->position->nama ?? ''}}</td>
                            <!-- Menampilkan nama departemen -->
                            <td>{{$employe->department->nama ?? ''}}</td>
                            <!-- Menampilkan nomor telepon -->
                            <td>{{$employe->telepon}}</td>
                            <!-- Menampilkan alamat -->
                            <td>{{$employe->alamat}}</td>
                            <!-- Tombol untuk tindakan (edit, detail, hapus) -->
                            <td class="col-2">
                                <!-- Tombol untuk mengedit profil karyawan -->
                                <a href="{{ route('profile.edit',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                <!-- Tombol untuk melihat detail profil karyawan -->
                                <a href="{{ route('profile.detail',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-calendar-o"></a>
                                <!-- Tombol untuk menghapus karyawan -->
                                <!-- <a href="#" wire:click.prevent="deleteEmploye({{$employe->id}})" class="btn btn-secondary fa fa-trash"></a> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>                   
                </table>
            </div>
        </div>
        <br><br>
        <!-- Menyertakan komponen Livewire untuk pengguna normal -->
        @livewire('users.normal-user-component')
    </div>
</div>
<script>
    // Inisialisasi DataTable untuk tabel dengan ID 'data-all-user'
    new DataTable('#data-all-user', {
        order: [['0', 'desc']]
    });
</script>
