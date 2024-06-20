<div>
    {{-- Karena dia tidak bersaing dengan siapa pun, tidak ada yang bisa bersaing dengannya. --}}
    <div class="container">
        <!-- Bagian untuk menempatkan konten di tengah -->
        <div class="d-flex justify-content-center">
            <!-- Kartu untuk mengedit nama atau email -->
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Edit Name Or Email
                </div>
                <div class="card-body">
                    <!-- Tabel untuk menampilkan daftar user -->
                    <table class="table" id="#">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Looping melalui daftar user untuk menampilkan data masing-masing -->
                            @foreach ($users as $user)
                            <tr>
                                <!-- Menampilkan nama user -->
                                <td>{{$user->name}}</td>
                                <!-- Menampilkan email user -->
                                <td>{{$user->email}}</td>
                                <!-- Tombol untuk mengedit data user -->
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
    // Inisialisasi DataTable untuk tabel dengan ID 'data-user-all'
    new DataTable('#data-user-all', {
        order: [['2', 'desc']]
    });
</script>
