<div class="container">
    <!-- Baris untuk menempatkan konten di tengah -->
    <div class="row d-flex justify-content-center">
        <!-- Menampilkan sapaan kepada pengguna yang sedang login -->
        <b class="text-center">Hi, {{Auth::user()->name}} !</b>
        <br><br>
        <!-- Jika pengguna adalah 'normal_user' -->
        @if (Auth::user()->role === 'normal_user')
        <div class="col-lg-11 col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="">Active</span></div>
                                <div class="stat-heading">Employe</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kalender untuk pengguna 'normal_user' -->
        <div class="col-md-12 col-lg-11">
            <div class="card">
                <div class="card-body">
                    <div class="calender-cont widget-calender">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Jika pengguna adalah 'admin' -->
        @if (Auth::user()->role === 'admin')
        <!-- Menampilkan jumlah karyawan -->
        <div class="col-lg-3 col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{$employe}}</span></div>
                                <div class="stat-heading">Employe</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menampilkan jumlah akun pengguna -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-browser"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{$users_count}}</span></div>
                                <div class="stat-heading">Account User</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Bagian untuk menampilkan semua akun pengguna -->
    <div>
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
                                    <th>Nama</th>
                                    <th>Tanggal Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->created_at}}</td>
                                </tr>   
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     // Menginisialisasi DataTable untuk tabel dengan id 'data-user-all'
     new DataTable('#data-user-all', {
            order: [['1', 'desc']]
        });
</script>
