<div>
    {{-- Karena dia tidak bersaing dengan siapa pun, tidak ada yang bisa bersaing dengannya. --}}
    <div class="container">
        <!-- Bagian untuk menempatkan konten di tengah -->
        <div class="d-flex justify-content-center">
            <!-- Kartu untuk menampilkan semua akun user -->
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    all-User Account
                </div>
                <div class="card-body">
                    <!-- Tabel untuk menampilkan daftar user -->
                    <table class="table" id="data-user-all">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Looping melalui daftar user untuk menampilkan data masing-masing -->
                            @foreach ($users as $user)
                            <tr>
                                <!-- Menampilkan nama user -->
                                <td>{{$user->name}}</td>
                                <!-- Menampilkan peran user -->
                                <td>{{$user->role}}</td>
                                <!-- Menampilkan email user -->
                                <td>{{$user->email}}</td>
                                <!-- Komentar: Bagian ini dapat digunakan untuk menambahkan aksi seperti edit atau delete -->
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
    // Inisialisasi DataTable untuk tabel dengan ID 'data-user-all'
    new DataTable('#data-user-all', {
        order: [['2', 'desc']] // Mengurutkan berdasarkan kolom ketiga (Email) secara descending
    });
</script>
